<?php

namespace App\View\Components\Front;

use App\Models\Product;
use Illuminate\Support\Carbon;
use Illuminate\View\Component;

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
    public $last_minutes;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( Product $product )
    {
        $this->product = $product;
        $this->last_minutes = Carbon::parse($this->product->expired_at)->diffInMinutes(Carbon::now()) < (int) config('auction.increase_expiration_on_new_bid');
        $this->product_expire = (!$this->product->isExpired())?$product->elapsed('expired_at')->toHuman(
                '<ul id="countdown_current_product" class="sidebar-countdown" data-product_id="'.$this->product->id.'" data-date="'.showDateTime($this->product->expired_at, 'm/d/Y H:i:s').'">'.
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
                '<ul id="countdown_current_product" class="sidebar-countdown" data-product_id="'.$this->product->id.'" data-date="'.showDateTime($this->product->expired_at, 'm/d/Y H:i:s').'">'.
                    '<li><span class="days">{days}d</span></li>'.
                    '<li><span class="hours">{hours}h</span></li>'.
                    '<li><span class="minutes">{minutes}m</span></li>'.
                    '<li><span class="seconds">{seconds}s</span></li>').
                '</ul>'
            :
            '<div class="text-center fs-4 text--base fw-bold"><span class="finished-bid">'.__('Product Sold!').'</span></div>';

        //$this->last_minutes = Carbon::parse($this->product->expired_at);
        $this->last_minutes = Carbon::parse($this->product->expired_at)->diffInMinutes(Carbon::now()) < (int) config('auction.increase_expiration_on_new_bid');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.count-down-auction',[
            'product' => $this->product
        ]);
    }
}
