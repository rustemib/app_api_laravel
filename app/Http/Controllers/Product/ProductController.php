<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        $filters = $request->get('properties');

        if($filters){
            foreach($filters as $property => $values){
                // Мы добавляем условие в запрос: продукты должны иметь свойства, соответствующие фильтру
                $query->whereHas('properties', function ($query) use ($property, $values) {
                    // Для каждого значения данного свойства
                    foreach($values as $value){
                        // Мы добавляем условие в запрос: значение свойства должно соответствовать переданному
                        $query->where($property, $value);
                    }
                });
            }
        }

        return $query->paginate(40);
    }

}
