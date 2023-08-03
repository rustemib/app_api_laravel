<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Post(
 *     path="/api/properties",
 *     summary="Create ProductProperty",
 *     tags={"Property"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="", type="array", @OA\Items(
 *                          @OA\Property(property="product_id", type="integer"),
 *                          @OA\Property(property="color1", type="string"),
 *                          @OA\Property(property="color2", type="string"),
 *                          @OA\Property(property="brand", type="string"),
 *                      )),
 *                  )
 *              },
 *              example={
 *
 *                      "product_id": 3,
 *                      "color1": "Red",
 *                      "color2": "White",
 *                      "brand": "Nike"
 *
 *              }
 *          ),
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         security={{ "bearerAuth": {} }},
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="product_id", type="integer", example=2),
 *                  @OA\Property(property="color1", type="string", example="Red"),
 *                  @OA\Property(property="color2", type="string", example="Black"),
 *                  @OA\Property(property="brand", type="string", example="Nike"),
 *              ),
 *         ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/properties",
 *     summary="All Properties",
 *     tags={"Property"},
 *     security={{ "bearerAuth": {} }},
 *
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="product_id", type="integer", example="3"),
 *                  @OA\Property(property="color2", type="string", example="Red"),
 *                  @OA\Property(property="color1", type="string", example="Yello"),
 *                  @OA\Property(property="brand", type="string", example="Adidas"),
 *              )),
 *         ),
 *     ),
 * ),
 *
 *
 *
 * @OA\Get(
 *     path="/api/properties/{property}",
 *     summary="Property",
 *     tags={"Property"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="Property ID",
 *         in="path",
 *         name="property",
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
 *                  @OA\Property(property="product_id", type="integer", example="3"),
 *                  @OA\Property(property="color2", type="string", example="Red"),
 *                  @OA\Property(property="color1", type="string", example="Yello"),
 *                  @OA\Property(property="brand", type="string", example="Adidas"),
 *              ),
 *         ),
 *     ),
 * ),
 *
 *
 * @OA\Patch(
 *     path="/api/properties/{property}",
 *     summary="Property Update",
 *     tags={"Property"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="Property ID",
 *         in="path",
 *         name="property",
 *         required=true,
 *         example=2,
 *
 *      ),
 *
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="product_id", type="integer", example="3"),
 *                      @OA\Property(property="color2", type="string", example="Red"),
 *                      @OA\Property(property="color1", type="string", example="Yello"),
 *                      @OA\Property(property="brand", type="string", example="Adidas"),
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
 *     path="/api/properties/{property}",
 *     summary="Property delete",
 *     tags={"Property"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="Property ID",
 *         in="path",
 *         name="property",
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
class PropertyController extends Controller
{
    //
}
