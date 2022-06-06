<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCart extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
