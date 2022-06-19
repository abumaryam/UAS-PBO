<?php 
namespace App\Models;

use App\Models\User;

class Mahasiswa extends User
{
    private $nim, $nama, $IPK, $alamat, $perguruan_tinggi;

    public function __construct($nim, $nama, $IPK, $alamat, PerguruanTinggi  $perguruan_tinggi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat= $alamat;
        $this->perguruantinggi = $perguruan_tinggi;
    }

    public function inputMakul()
    {

    }

}

