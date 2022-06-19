<?php

namespace App\Models;
require_once('User.php');
Use App\Models\TugasAkhir;

class Mahasiswa extends User
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $perguruan_tinggi;

    public function inputMakul(){

    }
    public function updateProfil(){

    }
    public function __construct($nim,$nama,$IPK,$alamat, PerguruanTinggi $perguruan_tinggi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
        $this->perguruan_tinggi = $perguruan_tinggi;
    }
}
?>