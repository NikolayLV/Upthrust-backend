<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'phone'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
