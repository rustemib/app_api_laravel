<?php

namespace App\Http\Controllers\Attribute;

use App\Http\Controllers\Controller;
use App\Http\Requests\Attribute\StoreRequest;
use App\Http\Requests\Attribute\UpdateRequest;
use App\Models\Attribute;
use App\Services\AttributeService;
use App\Http\Resources\Attribute\AttributeResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AttributeController extends Controller
{
    protected $attributeService;

    public function __construct(AttributeService $attributeService)
    {
        $this->attributeService = $attributeService;
    }

    public function index(): AnonymousResourceCollection
    {
        $attributes = $this->attributeService->getAll();
        return AttributeResource::collection($attributes);
    }

    public function store(StoreRequest $request): AttributeResource
    {
        $attribute = $this->attributeService->store($request);
        return AttributeResource::make($attribute);
    }

    public function show(Attribute $attribute): AttributeResource
    {
//        var_dump($attribute);
        return AttributeResource::make($attribute);
    }

    public function update(UpdateRequest $request, Attribute $attribute): AttributeResource
    {
        $this->attributeService->update($request, $attribute);
        return AttributeResource::make($attribute);
    }

    public function destroy(Attribute $attribute): \Illuminate\Http\JsonResponse
    {
        $this->attributeService->delete($attribute);
        return response()->json([
            'message' => 'done'
        ]);
    }
}
