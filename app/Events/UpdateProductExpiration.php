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

class UpdateProductExpiration implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $product;

	/**
	 * @param Product|Product[]|\LaravelIdea\Helper\App\Models\_IH_Product_C|null $product
	 */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function broadcastOn(): Channel {
        return new Channel( 'product.' . $this->product->id .'.expiration.update' );
    }

    public function broadcastWith(): array {

        //if ( $this->product->latest_bid && auth()->id() === $this->product->latest_bid->user_id ) {
       //     $this->current_bid_amount_text .= '<span class="text-secondary fw-normal small" >' . __( '(your bid)' ) . '</span >';
        //}

        return [
            'expired_at'              => $this->product->expired_at,
           // 'current_bid_amount'      => showAmount( $this->current_bid_amount ),
            //'current_bid_amount_text' => $this->current_bid_amount_text,
            //'next_bid_amount'         => '<i class="las la-gavel me-2"></i> ' . $this->general->cur_sym . ' ' . showAmount( $this->next_bid_amount ),
        ];
    }
}
