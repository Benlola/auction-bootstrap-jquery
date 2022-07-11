<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function bids()
    {
        return $this->hasManyThrough(Bid::class, Product::class);
    }

    public function roles(): BelongsToMany {
        return $this->belongsToMany(Role::class, 'user_roles', 'admin_id');
    }

    public function isAdministrator() {
        return $this->roles()->where('name', 'Administrator')->exists();
    }

}
