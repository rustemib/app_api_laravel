<?php

namespace App\Services;

use App\Http\Requests\Attribute\StoreRequest;
use App\Http\Requests\Attribute\UpdateRequest;
use App\Models\Attribute;
use Illuminate\Database\Eloquent\Collection;

class AttributeService
{
    public function getAll(): Collection
    {
        return Attribute::all();
    }

    public function store(StoreRequest $request): Attribute
    {
        return Attribute::create($request->validated());
    }

    public function update(UpdateRequest $request, Attribute $attribute): Attribute
    {
        $attribute->update($request->validated());
        return $attribute;
    }

    public function delete(Attribute $attribute): bool
    {
        return $attribute->delete();
    }
}
