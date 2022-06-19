<?php

namespace App\Models;

class User
{
    public $usernsme;
    public $pasword;
    protected $email;
    protected $hidden;
    protected $cast;

    public function login(){
        return true;
        return false;
    }

    public function register(){
        return true;
        return false;
    }
}
