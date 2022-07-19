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

class BidHistory implements ShouldBroadcastNow {
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Product $product;
    public GeneralSetting $general;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct( Product $product ) {
        $this->product = $product;
        $this->general = GeneralSetting::first();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn() {
        return new Channel( 'product.bid-history.' . $this->product->id );
    }

    public function broadcastWith() {
        $bid_history      = $this->product->bids()->orderBy( 'created_at', 'desc' )->limit( 7 )->get();

        $bid_history_html = '<h5 class="title mb-4">'.__('Bid history').'</h5>';
        $bid_history_html .= '<ul>';
        foreach($bid_history as $key => $bid) {
            $bid_history_html .= '<li class="row py-2 m-0"
                        style="border-bottom: 1px solid #e2e2e2f4; opacity:0.' . ( $key+1 - 10 ) * ( - 1 ) . '">
                        <div class="fs-5 col-6 ps-0">
                            <i class="las la-gavel"></i> <span
                                class="amount fw-bold">' . $this->general->cur_sym . ' ' . showAmount( $bid->amount ) . '</span>
                        </div>
                        <div class="text-secondary small col-6 text-end pe-0">
                            <div
                                title="' . showDateTime( $bid->created_at, 'Y-m-d h:i:s' ) . '">' . $bid->created_at->diffForHumans() . '</div>
                        </div>
                    </li>';
        }
        $bid_history_html .= '</ul>';
        return [
            'history' => $bid_history_html,
        ];
    }
}
