<?php
namespace Models;

class User {
    public $username;
    public $password;
    protected $email;
    protected $hidden;
    protected $cast;

    public function login()
    {
        echo "Ini adalah fungsi login";
    }

    public function register()
    {
        echo "Ini adalah fungsi register";
    }

}