<?php

use App\Http\Controllers\Attribute\AttributeController;
use App\Http\Controllers\Attribute\ProductAttributeValueController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});

Route::middleware('auth:sanctum')->group(function () {
});
Route::apiResource('products', ProductController::class)->middleware('jwt.auth');
Route::apiResource('attributes', AttributeController::class)->middleware('jwt.auth');
Route::apiResource('values', ProductAttributeValueController::class)->middleware('jwt.auth');
