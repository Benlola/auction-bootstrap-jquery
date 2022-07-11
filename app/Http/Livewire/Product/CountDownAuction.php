<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Illuminate\Support\Carbon;
use Livewire\Component;

class CountDownAuction extends Component
{
    /**
     * @var Product
     */
    public $product;
    public $product_expire;
    /**
     * @var Carbon
     */
    public $final_step;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount( Product $product)
    {
        $this->product = $product;
        $this->final_step = Carbon::parse($this->product->expired_at)->diffInMinutes(Carbon::now()) < 3;
        $this->product_expire = (!$product->isExpired())?$product->elapsed('expired_at')->toHuman(
            '<ul class="sidebar-countdown">'.
            '<li><span class="days">{days}d</span></li>'.
            '<li><span class="hours">{hours}h</span></li>'.
            '<li><span class="minutes">{minutes}m</span></li>'.
            '<li><span class="seconds">{seconds}s</span></li>').
            '</ul>'
            :
            '<div class="text-center fs-4 text--base fw-bold"><span class="finished-bid">'.__('Product Sold!').'</span></div>';
    }

    public function check_expired_product() {
        $this->product_expire = (!$this->product->isExpired())?$this->product->elapsed('expired_at')->toHuman(
             '<ul class="sidebar-countdown">'.
            '<li><span class="days">{days}d</span></li>'.
            '<li><span class="hours">{hours}h</span></li>'.
            '<li><span class="minutes">{minutes}m</span></li>'.
            '<li><span class="seconds">{seconds}s</span></li>').
            '</ul>'
            :
            '<div class="text-center fs-4 text--base fw-bold"><span class="finished-bid">'.__('Product Sold!').'</span></div>';

        //$this->final_step = Carbon::parse($this->product->expired_at);
        $this->final_step = Carbon::parse($this->product->expired_at)->diffInMinutes(Carbon::now()) < 3;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.product.count-down-auction',[
            'product' => $this->product
        ]);
    }
}
