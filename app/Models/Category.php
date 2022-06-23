<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable
        = [
            'name',
            'icon',
            'status',
            'media_category',
        ];

    protected $casts
        = [
            'status'         => 'boolean',
            'media_category' => 'array',
        ];

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class);
    }

}
