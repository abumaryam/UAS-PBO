<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use App\Models\pegawai;

class Mahasiswa extends Eloquent
{
    use HasApiTokens, HasFactory;
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;

    public function inputMatku(){

    }

    public function updateProfil(){

    }
    
}