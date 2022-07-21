<?php

namespace App\Models;

use App\Traits\CalculateTimeDiff;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use hasFactory;
    use InteractsWithMedia;
    use CalculateTimeDiff;


    protected $guarded = ['id'];

    protected $casts
        = [
            'started_at'    => 'datetime',
            'expired_at'    => 'datetime',
            'specification' => 'array',
            'report'        => 'array',
        ];

    // Scope

    public function scopePending()
    {
        return $this->where('status', 0)->where('expired_at', '>', now());
    }

    public function scopeLive()
    {
        return $this->where('status', 1)->where('started_at', '<', now())->where('expired_at', '>', now());
    }

    public function scopeUpcoming()
    {
        return $this->where('status', 1)->where('started_at', '>', now());
    }

    public function scopeExpired()
    {
        return $this->where('expired_at', '<', now());
    }

    public function isExpired()
    {
        return Carbon::parse($this->expired_at) < Carbon::now();
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function latest_bid()
    {
        return $this->hasOne(Bid::class)->latest();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function winner()
    {
        return $this->hasOne(Winner::class);
    }

    /*
        public function store ( Request $request, Product $product) {
            //broadcast(new UpdateProduct($product))->toOthers();
            broadcast(new UpdateProductExpiration($product))->toOthers();
        }

        */


    public function registerMediaCollections(): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 800, 600)
            ->nonQueued();

        $this
            ->addMediaConversion('main')
            ->fit(Manipulations::FIT_CROP, 563, 544)
            ->nonQueued();

        $this
            ->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 400, 270)
            ->nonQueued();

        $this
            ->addMediaConversion('gallery')
            ->fit(Manipulations::FIT_CROP, 135, 91)
            ->nonQueued();
    }

}
