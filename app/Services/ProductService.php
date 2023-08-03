<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductService
{
    public function getProducts($properties, $paginationCount): LengthAwarePaginator
    {
        $query = Product::query();

        foreach ($properties as $property => $values) {
            $query->whereHas('properties', function ($query) use ($property, $values) {
                if (is_array($values)) {
                    $query->whereIn($property, $values);
                } else {
                    $query->where($property, $values);
                }
            });
        }

        return $query->paginate($paginationCount);
    }


    public function storeProduct($request): Product
    {
        return Product::create($request->validated());
    }

    public function updateProduct($request, $product): Product
    {
        $product->update($request->validated());
        return $product;
    }

    public function deleteProduct($product): bool
    {
        return $product->delete();
    }
}

