<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\FilterRequest;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PAGINATION_COUNT = 40;
    public function index(FilterRequest $request): AnonymousResourceCollection
    {
        $query = Product::query();

        $properties = $request->input('properties', []);
        foreach ($properties as $property => $values) {
            $query->whereHas('properties', function ($query) use ($property, $values) {
                if (is_array($values)) {
                    $query->whereIn($property, $values);
                } else {
                    $query->where($property, $values);
                }
            });
        }

        $products = $query->paginate(self::PAGINATION_COUNT);
        return ProductResource::collection($products);
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
    public function store(StoreRequest $request): ProductResource
    {
        $data = $request->validated();
        $product = Product::create($data);

        return ProductResource::make($product);

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product): ProductResource
    {
        return ProductResource::make($product);
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
    public function update(UpdateRequest $request, Product $product): ProductResource
    {
        $data = $request->validated();
        $product->update($data);
        return ProductResource::make($product);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): \Illuminate\Http\JsonResponse
    {
        $product->delete();
        return response()->json([
            'message'=>'done'
        ]);
    }
}
