<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User;

class User extends User
{
    public $username;
    public $password;
    protected $email;
    protected $hidden = [];
    protected $cast = [];

    public function login()
    {

    }
    public function register()
    {

    }
}
