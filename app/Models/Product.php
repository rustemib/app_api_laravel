<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $fillable = ['name', 'price', 'quantity'];

    public function attributeValues()
    {
        return $this->hasMany(ProductAttributeValue::class);
    }


}
