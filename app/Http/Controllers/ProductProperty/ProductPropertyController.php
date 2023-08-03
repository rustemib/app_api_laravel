<?php

namespace App\Http\Controllers\ProductProperty;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductProperty\UpdateRequest;
use App\Http\Resources\ProductProperty\ProductPropertyResource;
use App\Models\ProductProperty;
use App\Services\PropertyService;
use App\Http\Requests\ProductProperty\StoreRequest;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProductPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $propertyService;

    public function __construct(PropertyService $propertyService)
    {
        $this->propertyService = $propertyService;
    }
    public function index(): AnonymousResourceCollection
    {
        $properties = $this->propertyService->getAll();
        return ProductPropertyResource::collection($properties);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): ProductPropertyResource
    {
       $property = $this->propertyService->store($request);
       return ProductPropertyResource::make($property);

    }

    /**
     * Display the specified resource.
     */
    public function show(ProductProperty $property): ProductPropertyResource
    {
        return ProductPropertyResource::make($property);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, ProductProperty $property): ProductPropertyResource
    {
        $this->propertyService->update($request, $property);
        return ProductPropertyResource::make($property);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductProperty $property): \Illuminate\Http\JsonResponse
    {
        $this->propertyService->delete($property);
        return response()->json([
            'message'=>'done'
        ]);
    }
}
