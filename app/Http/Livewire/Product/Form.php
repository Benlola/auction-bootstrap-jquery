<?php

namespace App\Http\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use App\Rules\FileTypeValidate;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $product;

    public function rules(): array
    {
        return [
            'product.name'              => 'required',
            'product.category'          => 'required|exists:categories,id',
            'product.price'             => 'required|numeric|gte:0',
            'product.expired_at'        => 'required',
            'product.short_description' => 'required',
            'product.long_description'  => 'required',
            'product.specification'     => 'nullable|array',
            'product.started_at'        => 'required_if:schedule,1|date|after:yesterday|before:expired_at',
            'product.image'             => ['required', 'image', new FileTypeValidate(['jpeg', 'jpg', 'png'])],
        ];
    }


    public function mount(Product $product): void
    {
        $this->product = ! $product->exists ? $this->makeBlankModel() : $product;
    }

    public function render()
    {
        return view('livewire.product.form', [
            'categories' => Category::where('status', 1)->get(),
            'product'    => $this->product,
        ]);
    }

    public function save()
    {
        $this->validate();
        try {
            DB::beginTransaction();
            $this->product->save();

//
//                        if ($this->upload) {
//                            $file_name = sprintf("%s.%s", $this->product->id, $this->upload->getClientOriginalExtension());
//                            $this->product->update([
//                                'image' => $this->upload->storeAs('product', "{$file_name}", 'public'),
//                            ]);
//                        }
            DB::commit();
            if ($this->product->wasRecentlyCreated === true) {
                return redirect()
                    ->route("admin.product.edit", $this->product)
                    ->with('success', __("crud.insert_success"));
            } else {
                $this->notify(__("crud.update_success"));

                return back();
            }
        } catch (Exception $exception) {
            DB::rollBack();
            $this->notify($exception->getMessage(), 'error');
        }
    }

    private function makeBlankModel()
    {
        return Product::make([
            'admin_id' => auth()->id(),
            'status'   => 0,
        ]);
    }
}
