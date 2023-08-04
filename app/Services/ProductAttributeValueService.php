<?php

namespace App\Services;

use App\Models\ProductAttributeValue;
use Illuminate\Database\Eloquent\Collection;

class ProductAttributeValueService
{
    public function getAll(): Collection
    {
        return ProductAttributeValue::all();
    }

    public function store($request): ProductAttributeValue
    {
        return ProductAttributeValue::create($request->validated());
    }

    public function update($request, $value): ProductAttributeValue
    {
        $value->update($request->validated());
        return $value;
    }

    public function delete(ProductAttributeValue $value): bool
    {
        return $value->delete();
    }
}

