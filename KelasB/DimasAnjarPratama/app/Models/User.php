<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    public $username;
    public $password;
    protected $email;
    protected $hidden = [];
    protected $cast = [];

    public function login()
    {
        return true;
        return false;
    }

    public function register()
    {
        return true;
        return false;
    }

}
