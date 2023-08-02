<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/products",
 *     summary="create",
 *     tags={"Product"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="", type="array", @OA\Items(
 *                          @OA\Property(property="name", type="string"),
 *                          @OA\Property(property="price", type="integer"),
 *                          @OA\Property(property="quantity", type="integer"),
 *                      )),
 *                  )
 *              },
 *              example={
 *
 *                      "name": "Some Name",
 *                      "price": 30,
 *                      "quantity": 20
 *
 *              }
 *          ),
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Some name"),
 *                  @OA\Property(property="price", type="integer", example=100),
 *                  @OA\Property(property="quantity", type="integer", example=20),
 *              ),
 *         ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/products",
 *     summary="All Products",
 *     tags={"Product"},
 *     security={{ "bearerAuth": {} }},
 *
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Some name"),
 *                  @OA\Property(property="price", type="integer", example=100),
 *                  @OA\Property(property="quantity", type="integer", example=20),
 *              )),
 *         ),
 *     ),
 * ),
 *
 *
 *
 * @OA\Get(
 *     path="/api/products/{product}",
 *     summary="Product",
 *     tags={"Product"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="Product ID",
 *         in="path",
 *         name="product",
 *         required=true,
 *         example=1,
 *
 *      ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Some name"),
 *                  @OA\Property(property="price", type="integer", example=100),
 *                  @OA\Property(property="quantity", type="integer", example=20),
 *              ),
 *         ),
 *     ),
 * ),
 *
 *
 * @OA\Patch(
 *     path="/api/products/{product}",
 *     summary="Product Update",
 *     tags={"Product"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="Product ID",
 *         in="path",
 *         name="product",
 *         required=true,
 *         example=2,
 *
 *      ),
 *
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="Some edit name"),
 *                      @OA\Property(property="price", type="integer", example=99),
 *                      @OA\Property(property="quantity", type="integer", example=21),
 *                  )
 *              }
 *          ),
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Some name"),
 *                  @OA\Property(property="price", type="integer", example=100),
 *                  @OA\Property(property="quantity", type="integer", example=20),
 *              ),
 *         ),
 *     ),
 * ),
 *
 * @OA\Delete(
 *     path="/api/products/{product}",
 *     summary="Product delete",
 *     tags={"Product"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="Product ID",
 *         in="path",
 *         name="product",
 *         required=true,
 *         example=1,
 *
 *      ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(property="message", type="string", example="done"),
 *         ),
 *     ),
 * ),
 */
class ProductController extends Controller
{

}
