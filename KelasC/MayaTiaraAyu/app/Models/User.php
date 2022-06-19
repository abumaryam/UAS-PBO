<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as BaseUser;

class User extends BaseUser{
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