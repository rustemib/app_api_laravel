<?php

namespace App\Services;

use App\Http\Requests\AttributeValue\StoreRequest;
use App\Http\Requests\AttributeValue\UpdateRequest;
use App\Models\ProductAttributeValue;
use Illuminate\Database\Eloquent\Collection;

class ProductAttributeValueService
{
    public function getAll(): Collection
    {
        return ProductAttributeValue::all();
    }

    public function store(StoreRequest $request): ProductAttributeValue
    {
        return ProductAttributeValue::create($request->validated());
    }

    public function update(UpdateRequest $request, ProductAttributeValue $value): ProductAttributeValue
    {
        $value->update($request->validated());
        return $value;
    }

    public function delete(ProductAttributeValue $value): bool
    {
        return $value->delete();
    }
}

