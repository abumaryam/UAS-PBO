<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $username;
    public $password;
    protected $email;
    protected $hidden;
    protected $cast;

    public function login(){

    }

    public function register(){
        
    }
}
