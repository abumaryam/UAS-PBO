<?php

namespace App\Models;

use Illuminate\Fondation;

class User extends Auth\User
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