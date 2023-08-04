<?php

namespace App\Http\Controllers\Attribute;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeValue\StoreRequest;
use App\Http\Requests\AttributeValue\UpdateRequest;
use App\Http\Resources\Attribute\ProductAttributeValueResource;
use App\Models\ProductAttributeValue;
use App\Services\ProductAttributeValueService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProductAttributeValueController extends Controller
{
    protected $productAttributeValueService;

    public function __construct(ProductAttributeValueService $productAttributeValueService)
    {
        $this->productAttributeValueService = $productAttributeValueService;
    }

    public function index(): AnonymousResourceCollection
    {
        $values = $this->productAttributeValueService->getAll();
        return ProductAttributeValueResource::collection($values);
    }

    public function store(StoreRequest $request): ProductAttributeValueResource
    {
        $value = $this->productAttributeValueService->store($request);
        return ProductAttributeValueResource::make($value);
    }

    public function show(ProductAttributeValue $value): ProductAttributeValueResource
    {

        return ProductAttributeValueResource::make($value);
    }

    public function update(UpdateRequest $request, ProductAttributeValue $value): ProductAttributeValueResource
    {
        $value = $this->productAttributeValueService->update($request, $value);
        return ProductAttributeValueResource::make($value);
    }

    public function destroy(ProductAttributeValue $value): \Illuminate\Http\JsonResponse
    {
        $this->productAttributeValueService->delete($value);
        return response()->json([
            'message' => 'done'
        ]);
    }
}
