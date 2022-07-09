<?php

namespace App\View\Components\Front;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class ShowCarGallery extends Component
{
    /**
     * @var Model
     */
    private $product;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.show-car-gallery', [
            'product' => $this->product,
            'gallery' => $this->product->media()->limit(9)->get(),
        ]);
    }

}
