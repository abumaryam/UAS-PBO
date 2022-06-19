<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mahasiswa extends User
{
    use HasApiTokens, HasFactory, Notifiable;

    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    public function inputMatkul(){}

    public function updateProfil(){}

}