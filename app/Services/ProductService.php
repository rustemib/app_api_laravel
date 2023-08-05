<?php

namespace App\Services;

use App\Exceptions\ErrorMessages;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;


class ProductService
{
    public function get($attributes, $paginationCount): LengthAwarePaginator
    {

        $query = Product::query();

        if (isset($attributes['name'])) {
            $query->whereHas('attributeValues', function ($query) use ($attributes) {
                $query->whereHas('attribute', function ($query) use ($attributes) {
                    $query->where('name', $attributes['name']);
                });
            });
        }

        $products = $query->with('attributeValues.attribute')->paginate($paginationCount);

        if ($products->isEmpty() && isset($attributes['name'])) {
            throw new \Exception(ErrorMessages::ATTRIBUTE_NOT_FOUND);
        }

        return $products;
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

