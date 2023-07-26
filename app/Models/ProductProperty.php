<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProperty extends Model
{
    use HasFactory;
    protected $fillable = ['color1', 'color2', 'brand', 'product_id'];
    // Определяет отношение "многие к одному" между таблицами свойств продуктов и продуктами
    // Эта функция в модели ProductProperty указывает, что каждое свойство продукта
    // может быть связано только с одним продуктом. Laravel использует имя этой функции
    // (в данном случае "product") для связывания данных при выполнении запросов, которые
    // включают отношения между этими двумя моделями.
    // Когда вы вызываем $productProperty->product в коде, Laravel автоматически
    // выполнит запрос в базу данных для получения продукта, связанного с этим свойством,
    // используя foreign key в таблице ProductProperty.
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
