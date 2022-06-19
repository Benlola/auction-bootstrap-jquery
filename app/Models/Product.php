<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use hasFactory;
    use InteractsWithMedia;


    protected $guarded = ['id'];

    protected $casts = [
        'started_at' => 'datetime',
        'expired_at' => 'datetime',
        'specification' => 'array'
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

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function winner()
    {
        return $this->hasOne(Winner::class);
    }


    public function registerMediaCollections(): void
    {
        $this
            ->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 400, 270)
            ->nonQueued();

    }

}
