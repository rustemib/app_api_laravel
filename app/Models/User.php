<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    // HasApiTokens - трейт, используемый для работы с токенами API с помощью Laravel Sanctum.
    // HasFactory - трейт, используемый для работы с фабриками в Laravel для генерации тестовых данных.
    // Notifiable - трейт, используемый для работы с уведомлениями в Laravel.
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // $fillable - массив, который определяет, какие поля модели можно заполнить с помощью mass-assignment.
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // $hidden - массив, который определяет, какие поля должны быть скрыты при преобразовании модели в массив или JSON.
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // $casts - массив, который определяет, какие поля должны быть приведены к определенному типу при извлечении из базы данных.
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
