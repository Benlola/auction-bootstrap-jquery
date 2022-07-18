<?php

namespace App\Events;

use App\Models\GeneralSetting;
use App\Models\Product;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewBid implements ShouldBroadcastNow {
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $product;
    public $current_bid_amount;
    public $current_bid_amount_text;
    public $next_bid_amount;
    public $next_bid_amount_text;
    /**
     * @var GeneralSetting
     */
    public $general;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct( Product $product, $current_bid_amount, $next_bid_amount ) {
        $this->product              = $product;
        $this->current_bid_amount   = $current_bid_amount;
        $this->next_bid_amount      = $next_bid_amount;
        $this->next_bid_amount_text = '';
        $this->general              = GeneralSetting::first();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn() {
        return new Channel( 'channel.product.new-bid.' . $this->product->id );
    }

    public function broadcastWith() {

        return [
            'expired_at'           => showDateTime( $this->product->expired_at, 'm/d/Y H:i:s' ),
            'current_bid_amount'   => showAmount( $this->current_bid_amount ),
            'current_bid_usr_id'   => auth()->id(),
            'next_bid_amount'      => $this->next_bid_amount,
            'next_bid_amount_text' => '<i class="las la-gavel me-2"></i> ' . $this->general->cur_sym . ' ' . showAmount( $this->next_bid_amount ),
        ];
    }
}
