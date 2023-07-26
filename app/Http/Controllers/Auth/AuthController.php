<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        // Мы создаем нового пользователя с использованием метода create модели User.
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);
        // Здесь мы создаем токен для нового пользователя с помощью метода createToken.
        $token = $user->createToken('myapptoken')->plainTextToken;

        // Ответ включает в себя информацию о пользователе и токен доступа.
        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response, 201);
    }


    // Функция login получает данные запроса, которые были проанализированы и валидированы LoginRequest.
    public function login(LoginRequest $request)
    {
        // Мы пытаемся найти пользователя, который имеет указанный email или телефон.
        $user = User::where('email', $request->login)
            ->orWhere('phone', $request->login)
            ->first();

        // Если мы не можем найти пользователя или если предоставленный пароль не совпадает с сохраненным паролем пользователя,
        // то мы возвращаем ответ с сообщением об ошибке и HTTP-статусом 401, что означает "не авторизован".
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'Не верные данные'
            ], 401);
        }

        // Если пользователь найден и пароль верен, мы создаем токен для пользователя с помощью метода createToken.
        $token = $user->createToken('myapptoken')->plainTextToken;

        // Ответ включает в себя информацию о пользователе и токен доступа.
        $response = [
            'user' => $user,
            'token' => $token,
        ];

        // Отправляем ответ обратно клиенту с HTTP-статусом 201, что означает, что ресурс (в этом случае, токен) был успешно создан.
        return response($response, 201);
    }


    public function logout()
    {

        auth()->user()->tokens()->delete();

        // Возвращаем ответ, информирующий клиента о том, что выход был успешно выполнен.
        return [
            'message' => 'Logged out'
        ];
    }

}
