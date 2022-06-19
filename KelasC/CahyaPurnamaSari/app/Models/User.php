<?php

namespace App\Models;
Use Illuminate\Foundation\Auth\User;

Class User extends User {
    public $username = "cahyapurnama";
    public $password = "121212";
    protected $email = "saricya@gmail.com";
    protected $hidden = [];
    protected $cast = [];

    public function login() {

    }

    public function register() {
        
    }
}