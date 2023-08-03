<?php

namespace App\Http\Controllers\Swagger;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
/**
 * @OA\Post(
 *     path="/api/auth/login",
 *     summary="Login",
 *     tags={"Login"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             @OA\Property(property="email_or_phone", type="string", example="user@user or +70000000000"),
 *             @OA\Property(property="password", type="string", example="Password1!$")
 *         )
 *     ),
 *     @OA\Response(response=200, description="Successful login")
 * ),
 *
 * @OA\Post(
 *     path="/api/auth/logout",
 *     summary="Logout",
 *     tags={"Logout"},
 *     security={{ "bearerAuth": {} }},
 *
 *
 *      @OA\Response(response=200, description="Successful logout")
 * ),
 *
 *
 *
 *
 *
 *
 *
 *
 */
class AuthController extends Controller
{

}
