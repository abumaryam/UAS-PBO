<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable{
    public $username,
           $password;
    protected $email,
              $hidden = [],
              $cast = [];

    public function login(){
        return true;
    }
    public function register(){
        return true;
    }
}