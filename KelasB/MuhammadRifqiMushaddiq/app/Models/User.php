<?php

namespace App\Models;

class User{
 public $username;
 public $password;
 protected $email;
 protected $hidden;
 protected $array;

 public function login(){
  return TRUE;
  return FALSE;
 }
 public function register(){
  return TRUE;
  return FALSE;
 }
}
