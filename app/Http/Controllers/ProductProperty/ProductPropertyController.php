<?php

namespace App\Http\Controllers\ProductProperty;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductProperty\UpdateRequest;
use App\Http\Resources\ProductProperty\ProductPropertyResource;
use App\Models\ProductProperty;
use Illuminate\Http\Request;
use App\Http\Requests\ProductProperty\StoreRequest;
class ProductPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = ProductProperty::all();
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
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $product = ProductProperty::create($data);

        return ProductPropertyResource::make($product);

    }

    /**
     * Display the specified resource.
     */
    public function show(ProductProperty $property)
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
    public function update(UpdateRequest $request, ProductProperty $property)
    {
        $data = $request->validated();
        $property->update($data);
        return ProductPropertyResource::make($property);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductProperty $property)
    {
        $property->delete();
        return response()->json([
            'message'=>'done'
        ]);
    }
}
