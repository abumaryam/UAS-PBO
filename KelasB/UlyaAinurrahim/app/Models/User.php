<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    public $username,$password;
    protected $email; 
    protected $hidden = []; 
    protected $cast = [];

    public function __construct($username, $password, $email, $hidden, $cast)
    {
        $this->username = $nim;
        $this->password = $password;
        $this->email = $email;
        $this->hidden[] = $hidden;
        $this->cast[] = $cast;
    }

    public function login()
    {

    }

    public function registrasi()
    {

    }
}
