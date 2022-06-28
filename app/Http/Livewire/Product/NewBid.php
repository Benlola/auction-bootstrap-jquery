<?php

namespace App\Http\Livewire\Product;

use App\Models\AdminNotification;
use App\Models\Bid;
use App\Models\GeneralSetting;
use App\Models\Product;
use App\Models\Transaction;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NewBid extends Component
{

    public $amount;

    public $latest_bid;

    private $product;

    private $user;

    private $general;

    protected $listeners = ['bidAdded' => 'updateLastBid'];


    public function mount(int $product_id)
    {
        $this->user = auth()->user();

        $this->product = Product::find($product_id);

        $this->general = GeneralSetting::first();

        $this->latest_bid = $this->product->latest_bid->amount ?? null;
    }

    protected function rules(): array
    {
        return [
            'amount' => 'required|numeric|gt:0',
        ];
    }


    public function render()
    {
        return view('livewire.product.new-bid', [
            'product' => $this->product,
        ]);
    }


    public function saveBid()
    {
        $validatedData = $this->validate();

        if ($this->product->price > $this->amount) {
            $this->addError('amount', 'Bid amount must be greater than product price');

            return back();
        }

        if ($this->amount > $this->user->balance) {
            $this->addError('amount', 'Insufficient Balance');

            return back();
        }

        $bid = Bid::where('product_id', $this->product->id)->where('user_id', $this->user->id)->exists();
        if ($bid) {
            $this->addError('amount', 'You already bidden on this product');

            return back();
        }

        try {
            DB::beginTransaction();

            $new_bid = Bid::create(
                [
                    'product_id' => $this->product->id,
                    'user_id'    => $this->user->id,
                    'amount'     => $validatedData['amount'],
                ]
            );

            $this->product->total_bid += 1;
            $this->product->save();
            $this->user->balance -= $validatedData['amount'];
            $this->user->save();
            $trx = getTrx();
            Transaction::create(
                [
                    'product_id'   => $this->product->id,
                    'user_id'      => $this->user->id,
                    'amount'       => $validatedData['amount'],
                    'post_balance' => $this->user->balance,
                    'trx_type'     => '-',
                    'details'      => 'Subtracted for a new bid',
                    'trx'          => $trx,
                ]
            );


            if ($this->product->admin) {
                $adminNotification = new AdminNotification();
                $adminNotification->user_id = auth()->user()->id;
                $adminNotification->title = 'A user has been bidden on your product';
                $adminNotification->click_url = urlPath('admin.product.bids', $this->product->id);
                $adminNotification->save();
                $notify[] = ['success', 'Bidden successfully'];

                return back()->withNotify($notify);
            }

            $this->product->merchant->balance += $validatedData['amount'];
            $this->product->merchant->save();


            Transaction::create(
                [
                    'merchant_id'  => $this->product->merchant_id,
                    'user_id'      => $this->user->id,
                    'amount'       => $validatedData['amount'],
                    'post_balance' => $this->product->merchant->balance,
                    'trx_type'     => '+',
                    'details'      => showAmount($validatedData['amount']).' '.$this->general->cur_text.' Added for Bid',
                    'trx'          => $trx,
                ]
            );

            notify($this->product->merchant, 'BID_COMPLETE', [
                'trx'           => $trx,
                'amount'        => showAmount($validatedData['amount']),
                'currency'      => $this->general->cur_text,
                'product'       => $this->product->name,
                'product_price' => showAmount($this->product->price),
                'post_balance'  => showAmount($this->product->merchant->balance),
            ], 'merchant');

            $notify[] = ['success', 'Bidden successfully'];
            DB::commit();
            return back()->withNotify($notify);
        } catch (Exception $exception) {
            DB::rollback();
            $this->message($exception->getMessage(), 'error');
        }
    }

    public function updateLastBid()
    {
        $this->latest_bid = $this->product->latest_bid->amount;
    }
}
