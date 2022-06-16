<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public function winner()
    {
        return $this->hasOne(Winner::class);
    }

    public function scopeLast()
    {
        return $this->orderBy('created_at','desc')->limit(1)->pluck('amount');
    }
}
