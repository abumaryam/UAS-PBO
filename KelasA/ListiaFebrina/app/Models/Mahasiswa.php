<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;





use App\Models\User;

class Mahasiswa extends User
{
    use HasFactory;
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;


    public function __construct($nim, $nama, $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
        $this->alamat = $alamat;
    }
    public function inputMatkul()
    {
        
    }
    public function updateProfil()
    {

    }
    public function setNim($nim)
    {
        $this->nim = $nim;
    }
    public function getNim()
    {
        return $nim;
    }
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $nama;
    }
    public function setIpk($ipk)
    {
        $this->ipk = $ipk;
    }
    public function getIpk()
    {
        return $ipk;
    }
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }
    public function getAlamat()
    {
        return $alamat;
    }
}
