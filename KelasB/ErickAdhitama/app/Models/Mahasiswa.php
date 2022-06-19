<?php

namespace App\Models;

class Mahasiswa extends User{
    private $nim; /*String*/
    private $nama; /*String*/
    private $IPK; /*Float*/
    private $alamat; /*String*/

    public function __construct($nim, $nama, $ipk, $alamat)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
    }

    public function inputMatkul()
    {
        return true;
        return false;
    }

    public function updateProfil()
    {
        
    }
}