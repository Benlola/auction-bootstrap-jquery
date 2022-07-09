<?php

namespace App\View\Components\Front;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\Component;
use Illuminate\View\View;

class ProductGallery extends Component
{
    /**
     * @var Product
     */
    public $product;
    /**
     * @var \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public $categories;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;

        $this->categories = Category::query()->where("id", $this->product->category_id)
            ->first("media_category");
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View
    {
        return view('components.front.product-gallery',[
            'all_gallery' => $this->product->media()->get(),
            'gallery_category'  => $this->categories->media_category ?? [],
        ]);
    }
}
