<?php

namespace App\Models;
require_once ('User.php');
use App\Models\TugasAkhir;
use App\Models\PerguruanTinggi;

class Mahasiswa extends User{
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;
    private $perguruantinggi;

    public function inputMatkul(){
    
    }
    public function updateProfil(){
    
    }

    function __construct($nim, $nama, $IPK, $alamat, $perguruantinggi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $ipk;
        $this->alamat = $alamat;
        $this->perguruantinggi = $perguruantinggi;
    }
}
?>