<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $username;
    public $password;
    protected $email;
    protected $hidden = [];
    protected $cast = [];

    public function login(){
        return TRUE;
        return FALSE;
    }

    public function register(){
        return TRUE;
        return FALSE;
    }
}


