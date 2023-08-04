<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/attributes",
 *     summary="Create Attribute",
 *     tags={"Attribute"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="", type="array", @OA\Items(
 *                          @OA\Property(property="product_id", type="integer"),
 *                          @OA\Property(property="name", type="string"),
 *                      )),
 *                  )
 *              },
 *              example={
 *
 *                      "name": "Name",
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
 *                  @OA\Property(property="name", type="string", example="Name"),
 *              ),
 *         ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/attributes",
 *     summary="All Attributes",
 *     tags={"Attribute"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Name"),
 *              )),
 *         ),
 *     ),
 * ),
 *
 *
 *
 * @OA\Get(
 *     path="/api/attributes/{attribute}",
 *     summary="Attribute",
 *     tags={"Attribute"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="Property ID",
 *         in="path",
 *         name="attribute",
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
 *                  @OA\Property(property="name", type="string", example="Name"),
 *              ),
 *         ),
 *     ),
 * ),
 *
 *
 * @OA\Patch(
 *     path="/api/attributes/{attribute}",
 *     summary="Attribute Update",
 *     tags={"Attribute"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="Attribute ID",
 *         in="path",
 *         name="attribute",
 *         required=true,
 *         example=2,
 *
 *      ),
 *
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="Name"),
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
 *                  @OA\Property(property="name", type="string", example="Name"),
 *              ),
 *         ),
 *     ),
 * ),
 *
 * @OA\Delete(
 *     path="/api/attributes/{attribute}",
 *     summary="Attribute delete",
 *     tags={"Attribute"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="Property ID",
 *         in="path",
 *         name="attribute",
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
class AttributeController extends Controller
{
    //
}
