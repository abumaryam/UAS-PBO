<?php

namespace App\Model;

require_once('Pengguna.php');

use App\Models\TugasAkhir;

class Mahasiswa extends Pengguna{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    public function inputMatkul($nim, $nama, $IPK, $alamat){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
    }
    public function UpdateProfil()
    {
    }
    
}