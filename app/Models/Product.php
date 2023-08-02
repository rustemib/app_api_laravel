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

    public function properties()
    {
        return $this->hasMany(ProductProperty::class);
    }
    protected static function booted()
    {
        static::created(function ($product) {
            $colors = ['Red', 'Blue', 'Green', 'Yellow', 'Purple'];

            // Создание свойств с двумя случайными цветами и брендом
            $product->properties()->create([
                'color1' => $colors[array_rand($colors)],
                'color2' => $colors[array_rand($colors)],
                'brand' => 'Brand ' . Str::random(5)
            ]);
        });
    }

}
