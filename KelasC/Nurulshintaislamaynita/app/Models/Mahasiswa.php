<?php

namespace App\Models;
use Illuminate\Eloquent\Model;
use App\Models\PerguruanTinggi;

class Mahasiswa extends Model{
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;
    private $perguruanTinggi;

    public function __contruct($nim, $nama, $ipk, $alamat, PerguruanTinggi $perguruanTinggi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->nim = $nim;
        $this->ipk = $ipk;
        $this->alamat = $alamat;
        $this->perguruanTinggi = $perguruanTinggi;
    }
    public function inputMakul(){

    }
    public function updateProfil(){

    }
}