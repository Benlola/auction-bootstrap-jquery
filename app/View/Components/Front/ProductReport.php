<?php

namespace App\View\Components\Front;

use App\Models\Product;
use App\ViewModels\CarReport;
use Illuminate\View\Component;
use Illuminate\View\View;

class ProductReport extends Component
{
    /**
     * @var Product
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
     * @return View
     */
    public function render(): View
    {
        return view('components.front.product-report', [
            'product'      => $this->product,
            'blank_report' => $this->getBlankReport(),
        ]);
    }

    private function getBlankReport(): ?array
    {
        if ($this->product->category_id == 1) {
            return CarReport::getReportData();
        }

        return null;
    }
}
