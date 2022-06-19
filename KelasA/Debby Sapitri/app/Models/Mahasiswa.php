<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $perguruan_tinggi;

    public function __construct($nim, $nama, $IPK, $alamat, PerguruanTinggi $perguruan_tinggi)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->IPK = $alamat;
        $this->PerguruanTinggi = $perguruan_tinggi;
    }
    public function inputMatkul(){

    }
    public function uodateProfil(){

    }
}
