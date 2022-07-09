<?php

namespace App\Http\Livewire\Product;

use App\Models\GeneralSetting;
use App\Models\Product;
use Livewire\Component;

class ShowCarGallery extends Component
{
    /**
     * @var Product|Product[]|\LaravelIdea\Helper\App\Models\_IH_Product_C|null
     */
    private $product;
    /**
     * @var GeneralSetting
     */
    private $general;

    public function mount(int $product_id)
    {
        $this->product = Product::find($product_id);
        $this->general = GeneralSetting::first();
    }

    public function render()
    {
        return view('livewire.product.show-car-gallery', [
        'product' => $this->product,
        ]);
    }
}
