<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Property\PropertyController;
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
//Этот роут обрабатывает HTTP POST-запросы по адресу /register.
// Запросы обрабатываются методом register класса AuthController
// используется для создания новых пользователей.
Route::post('/register', [AuthController::class, 'register']);

//Этот роут обрабатывает POST-запросы по адресу /login.
// Запросы обрабатываются методом login класса AuthController
// используется для аутентификации пользователей.
Route::post('/login', [AuthController::class, 'login']);

//Этот роут обрабатывает POST-запросы по адресу /logout в контексте группы роутов,
// защищенных middleware auth:sanctum. Middleware проверяет, что пользователь аутентифицирован,
// прежде чем разрешить доступ к этому роуту. Запросы обрабатываются методом logout класса AuthController
// используется для выхода пользователя из системы.
Route::middleware('auth:sanctum')->group(function(){
    Route::post('/logout', [AuthController::class, 'logout']);
});

//Эта группа роутов защищена middleware auth:sanctum, что означает,
// что для доступа к этим роутам пользователь должен быть аутентифицирован.
// Роуты apiResource автоматически создают маршруты для типичных операций CRUD (create, read, update, delete)
// с ресурсами products и properties. Обработчики для этих роутов определены в контроллерах ProductController и PropertyController.
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('products', ProductController::class);
    Route::apiResource('properties', PropertyController::class);
});
