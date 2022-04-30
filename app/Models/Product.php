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
}
