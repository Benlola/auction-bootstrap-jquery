<?php

namespace App\Http\Livewire\Product;

use App\Models\GeneralSetting;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProductBidHistory extends Component {
    /**
     * @var Product
     * @var GeneralSetting
     */
    private $product;
    private $general;

    public function mount( Product $product ) {
        $this->product = $product;
        $this->general = GeneralSetting::first();
    }

    public function render(): View {
        return view( 'livewire.product.product-bid-history', [
            'product' => $this->product,
            'general' => $this->general,
        ] );
    }
}
