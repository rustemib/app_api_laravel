<?php

namespace App\Services;

use App\Http\Requests\ProductProperty\StoreRequest;
use App\Models\ProductProperty;
use Illuminate\Database\Eloquent\Collection;


class PropertyService
{
    public function getAll(): Collection
    {
        return ProductProperty::all();
    }

    public function store($request): ProductProperty
    {
        return ProductProperty::create($request->validated());
    }

    public function update($request, $property): ProductProperty
    {
        $property->update($request->validated());
        return $property;
    }

    public function delete(ProductProperty $property):bool
    {
        return $property->delete();
    }
}
