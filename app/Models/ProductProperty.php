<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProperty extends Model
{
    use HasFactory;
    protected $fillable = ['color1', 'color2', 'brand', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
