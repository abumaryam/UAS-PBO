<?php

namespace App\Models;
use Illuminate\Foundation\Auth;

class User extends Auth{
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