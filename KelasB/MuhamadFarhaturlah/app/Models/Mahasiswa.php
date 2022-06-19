<?php

namespace App\Models;
require_once('User.php');

use App\Models\TugasAkhir;

class Mahasiswa extends User{
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;

    public function inputMakul(){

    }
    public function updateProil(){

    }
    function __consttuct($nim, $nama, $ipk, $alamat){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $ipk;
        $this->alamat = $alamat;
    }
}