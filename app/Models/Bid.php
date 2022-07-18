<?php

namespace App\Models;

use App\Events\NewBid;
use http\Client\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bid extends Model
{

    protected $fillable
        = [
            'product_id',
            'user_id',
            'amount',
        ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }


    public function winner(): HasOne
    {
        return $this->hasOne(Winner::class);
    }

    public function scopeLast()
    {
        return $this->orderBy('created_at', 'desc')->limit(1)->pluck('amount');
    }

    public function store ( Request $request, Bid $bid) {
        broadcast(new NewBid($bid))->toOthers();
    }

}
