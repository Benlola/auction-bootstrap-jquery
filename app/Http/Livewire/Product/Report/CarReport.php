<?php

namespace App\Http\Livewire\Product\Report;

use App\Models\Product;
use Livewire\Component;

class CarReport extends Component
{
    public Product $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.product.report.car-report', [
            'report' => \App\ViewModels\CarReport::getReportData(),
        ]);
    }
}
