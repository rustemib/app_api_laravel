<?php

namespace App\Services;

use App\Exceptions\ErrorMessages;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;


class ProductService
{
    public function get(array $attributes, int $paginationCount): LengthAwarePaginator
    {

        $query = Product::query();

        foreach ($attributes as $attributeName => $attributeValues) {
            $query->whereHas('attributeValues', function ($query) use ($attributeName, $attributeValues) {
                $query->whereHas('attribute', function ($query) use ($attributeName) {
                    $query->where('name', $attributeName);
                })->whereIn('value', (array)$attributeValues);
            });
        }

        $products = $query->with('attributeValues.attribute')->paginate($paginationCount);

        if ($products->isEmpty() && !empty($attributes)) {
            throw new \Exception(ErrorMessages::ATTRIBUTE_NOT_FOUND);
        }

        return $products;
    }



    public function store(StoreRequest $request): Product
    {
        return Product::create($request->validated());
    }

    public function update(UpdateRequest $request, Product $product): Product
    {
        $product->update($request->validated());
        return $product;
    }

    public function delete(Product $product): bool
    {
        return $product->delete();
    }
}

