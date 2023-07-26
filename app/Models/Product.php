<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'phone', 'quantity'];

    //Определяет отношение "один ко многим" между таблицами продуктов и свойств продуктов
    //Эта функция в модели Product указывает, что у каждого продукта может быть несколько свойств,
    // хранящихся в таблице ProductProperty. Laravel использует имя этой функции (в данном случае "properties")
    //для связывания данных при выполнении запросов, которые включают отношения между этими двумя моделями.
    //
    // Когда вызываем $product->properties в коде, Laravel автоматически выполнит запрос
    // в базу данных для получения всех свойств, связанных с этим продуктом, используя foreign key
    // в таблице ProductProperty.
    public function properties()
    {
        return $this->hasMany(ProductProperty::class);
    }

}
