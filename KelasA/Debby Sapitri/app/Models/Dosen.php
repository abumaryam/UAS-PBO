<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Model\Penggawai;
class Dosen implements Penggawai
{
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa(){

    }
}
