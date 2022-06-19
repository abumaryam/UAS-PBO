<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


   class User
   {
       protected $email;
       public $username;
       public $passowrd;
       protected $hidden;
       protected $cast;

       public function login()
       {

       }
       public function register()
       {
        
       }
   }