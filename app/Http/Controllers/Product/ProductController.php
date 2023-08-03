<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\FilterRequest;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    const PAGINATION_COUNT = 40;
    public function index(FilterRequest $request): AnonymousResourceCollection
    {
        $products = $this->productService->getProducts($request->input('properties', []), self::PAGINATION_COUNT);
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
       $product = $this->productService->storeProduct($request);
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

        $this->productService->updateProduct($request, $product);
        return ProductResource::make($product);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): \Illuminate\Http\JsonResponse
    {
        $this->productService->deleteProduct($product);
        return response()->json([
            'message'=>'done'
        ]);
    }
}
