<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;


/**
 * @OA\Post(
 *     path="/api/values",
 *     summary="Create Attribute",
 *     tags={"Attribute Value"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="", type="array", @OA\Items(
 *                          @OA\Property(property="attribute_id", type="integer"),
 *                          @OA\Property(property="product_id", type="integer"),
 *                          @OA\Property(property="Value", type="string"),
 *                      )),
 *                  )
 *              },
 *              example={
 *
 *                      "attribute_id": 1,
 *                      "product_id": 1,
 *                      "value": "Name",
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
 *                  @OA\Property(property="attribute_id", type="integer", example=1),
 *                  @OA\Property(property="product_id", type="integer", example=1),
 *                  @OA\Property(property="value", type="string", example="Name"),
 *              ),
 *         ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/values",
 *     summary="All Attribute Values",
 *     tags={"Attribute Value"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="attribute_id", type="integer", example="1"),
 *                  @OA\Property(property="product_id", type="integer", example="1"),
 *                  @OA\Property(property="value", type="string", example="Name"),
 *              )),
 *         ),
 *     ),
 * ),
 *
 *
 *
 * @OA\Get(
 *     path="/api/values/{value}",
 *     summary="Attribute Value",
 *     tags={"Attribute Value"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="Attribute Value ID",
 *         in="path",
 *         name="value",
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
 *                  @OA\Property(property="attribute_id", type="integer", example="3"),
 *                  @OA\Property(property="product_id", type="integer", example="3"),
 *                  @OA\Property(property="value", type="string", example="Name"),
 *              ),
 *         ),
 *     ),
 * ),
 *
 *
 * @OA\Patch(
 *     path="/api/values/{value}",
 *     summary="Attribute Valu Update",
 *     tags={"Attribute Value"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="Attribute Value ID",
 *         in="path",
 *         name="value",
 *         required=true,
 *         example=2,
 *
 *      ),
 *
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="attribute_id", type="integer", example="1"),
 *                      @OA\Property(property="product_id", type="integer", example="1"),
 *                      @OA\Property(property="value", type="string", example="Name"),
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
 *                  @OA\Property(property="attribute_id", type="integer", example=1),
 *                  @OA\Property(property="product_id", type="integer", example=1),
 *                  @OA\Property(property="value", type="sting", example="Name"),
 *              ),
 *         ),
 *     ),
 * ),
 *
 * @OA\Delete(
 *     path="/api/values/{value}",
 *     summary="Attribute Value delete",
 *     tags={"Attribute Value"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="Attribute Value ID",
 *         in="path",
 *         name="value",
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
class ProductAttributeValueController extends Controller
{

}
