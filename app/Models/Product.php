<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    # Many To One
    public function category()
    {
        # Burada ise birçok product bir categoryde olabileceği için belongsTo category yaptık
        return $this->belongsTo(Category::class);
    }

    public function comment()
    {
        # Model klasorumuzun icinde ilişkilerimizi tanımlıyoruz
        # bir product birden fazla comment içerdiği alabilir
        return $this->hasMany(Comment::class);
    }
    public function shopcart()
    {
        return $this->hasMany(ShopCart::class);
    }

}
