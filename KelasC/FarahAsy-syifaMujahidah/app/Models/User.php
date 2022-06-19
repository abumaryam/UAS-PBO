<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $username;
    public $password;
    protected $email;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function login(){

    }

    public function register(){

    }

    public function __construct($username_baru,$password_baru)
    {
        $this->username=$username_baru;
        $this->password=$password_baru;
    }

    public function setEmail($email_baru)
    {
        $this->email=$email_baru;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
