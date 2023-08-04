<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductService
{
    public function get($properties, $paginationCount): LengthAwarePaginator
    {
        $query = Product::query();

        foreach ($properties as $attributeName => $values) {
            $query->whereHas('attributeValues', function ($query) use ($attributeName, $values) {
                $query->whereHas('attribute', function ($query) use ($attributeName) {
                    $query->where('name', $attributeName);
                });

                if (is_array($values)) {
                    $query->whereIn('value', $values);
                } else {
                    $query->where('value', $values);
                }
            });
        }

        return $query->with('attributeValues.attribute')->paginate($paginationCount);
    }


    public function store($request): Product
    {
        return Product::create($request->validated());
    }

    public function update($request, $product): Product
    {
        $product->update($request->validated());
        return $product;
    }

    public function delete($product): bool
    {
        return $product->delete();
    }
}

