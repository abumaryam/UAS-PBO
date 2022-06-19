<?php

namespace App\Models;
require_once "Illuminate\Foundation\Auth\User.php";

class User extends  User {
    public $username = "Nanda Sudarman";
    public $password = "Tersenyumlah123";
    protected $email= "H1101201054@student.untan.ac.id";
    protected $hidden = [];
    protected $cast = [];

    public function login(){

    }
    public function register() {

    }

}



