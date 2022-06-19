<?php

namespace App\Models;

class Pengguna{
    public $username;
    public $password;
    protected $email;

    public function login($username, $password, $email,){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }
    public function register($username, $password, $email,){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }
}