<?php

namespace App\Http\Livewire\Product;

use App\Http\Livewire\Traits\MessagesTrait;
use App\Models\AdminNotification;
use App\Models\Bid;
use App\Models\GeneralSetting;
use App\Models\Product;
use App\Models\Transaction;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NewBid extends Component {

    use MessagesTrait;

    public $amount;

    public $latest_bid;

    public $product;

    private $general;

    protected $listeners = [
        'save'     => 'save',
        'bidAdded' => 'updateLastBid'
    ];


    public function mount( int $product_id ) {
        $this->product = Product::find( $product_id );

        $this->general = GeneralSetting::first();

        $this->latest_bid = $this->product->latest_bid->amount ?? null;
    }

    protected function rules(): array {
        return [
            //'amount' => 'required|numeric|gt:'.(int)$this->latest_bid ?? $this->product->price ?? 0,
            'amount' => 'required|numeric|gt:0',
        ];
    }


    public function render() {
        return view( 'livewire.product.new-bid', [
            'product' => $this->product,
        ] );
    }


    public function checkData() {
        if ( auth()->check() ) {
            $this->resetErrorBag();

            $user = auth()->user();

            //Sanitize amount
            $this->amount = filter_var(str_replace(['.','+','-'],'',$this->amount), FILTER_SANITIZE_NUMBER_INT);

            if ( (int) $this->amount < (int) $this->product->price ) {
                $this->addError( 'amount', __( 'Bid amount must be greater than product price' ) );

                return back();
            }

            if ( $this->amount > $user->balance ?? 0 ) {
                $this->addError( 'amount', __( 'Insufficient Balance, :as add balance :ae', [
                    'as' => '<a href="' . route( 'user.deposit' ) . '">',
                    'ae' => '</a>'
                ] ) );

                return back();
            }

            $bid = Bid::where( 'product_id', $this->product->id )->latest()->first();
            if ( $bid->user_id === $user->id ) {
                $this->addError( 'amount', __( 'You already bidden on this product' ) );

                return back();
            }

            if ( $this->product->latest_bid ) {
                if ( $this->amount <= (int) $this->product->latest_bid->amount ) {
                    $this->addError( 'amount', __( 'Bid amount must be greater than last bid' ) );

                    return back();
                }
            }

            $this->confirm( $this->product->id, __( "Are you sure to bid on this product?" ), 'saveBid' );
        } else {
            $this->redirect( "/login" );
        }
    }


    public function save() {
        $validatedData = $this->validate();

        $this->confirm( $this->product->id, __( "Are you sure to bid on this product?" ), 'saveBid' );

        try {
            DB::beginTransaction();

            $user = auth()->user();


            Bid::create(
                [
                    'product_id' => $this->product->id,
                    'user_id'    => $user->id,
                    'amount'     => $validatedData['amount'],
                ]
            );

            $this->product->total_bid += 1;
            $this->product->save();
            $user->balance -= $validatedData['amount'];
            $user->save();
            $trx = getTrx();
            Transaction::create(
                [
                    'product_id'   => $this->product->id,
                    'user_id'      => $user->id,
                    'amount'       => $validatedData['amount'],
                    'post_balance' => $user->balance,
                    'trx_type'     => '-',
                    'details'      => 'Subtracted for a new bid',
                    'trx'          => $trx,
                ]
            );


            if ( $this->product->admin ) {
                $adminNotification            = new AdminNotification();
                $adminNotification->user_id   = auth()->user()->id;
                $adminNotification->title     = __( 'A user has been bidden on your product' );
                $adminNotification->click_url = urlPath( 'admin.product.bids', $this->product->id );
                $adminNotification->save();
                DB::commit();
                $this->message( __( 'Bidden successfully' ) );
                $this->amount = '';
                $this->emit( 'bidAdded' );

                return redirect()->back();
            }

            $this->product->merchant->balance += $validatedData['amount'];
            $this->product->merchant->save();


            Transaction::create(
                [
                    'merchant_id'  => $this->product->merchant_id,
                    'user_id'      => $user->id,
                    'amount'       => $validatedData['amount'],
                    'post_balance' => $this->product->merchant->balance,
                    'trx_type'     => '+',
                    'details'      => __(':amount :current_text Added for Bid',['amount'=>showAmount( $validatedData['amount'] ), 'current_text'=>$this->general->cur_text]),
                    'trx'          => $trx,
                ]
            );

            notify( $this->product->merchant, 'BID_COMPLETE', [
                'trx'           => $trx,
                'amount'        => showAmount( $validatedData['amount'] ),
                'currency'      => $this->general->cur_text,
                'product'       => $this->product->name,
                'product_price' => showAmount( $this->product->price ),
                'post_balance'  => showAmount( $this->product->merchant->balance ),
            ], 'merchant' );

            DB::commit();
            $this->emit( 'bidAdded' );
            $this->message( __( 'Bidden successfully' ) );

            return redirect()->back();
        } catch ( Exception $exception ) {
            DB::rollback();
            //            $this->addError('amount', 'Oops something went wrong');
            $this->addError( 'amount', $exception->getMessage() );
        }
    }

    public function updateLastBid() {
        $this->latest_bid = $this->product->latest_bid->amount;
    }

    public function last_bid() {
        $this->latest_bid = $this->product->latest_bid->amount;
    }

}
