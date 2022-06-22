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
    public function getNim() //0.5
    {
        return $nim;// seharusnya menggunakan $this
    }
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()//0.5
    {
        return $nama;// seharusnya menggunakan $this
    }
    public function setIpk($ipk)
    {
        $this->ipk = $ipk;
    }
    public function getIpk()//0.5
    {
        return $ipk; // seharusnya menggunakan $this
    }
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }
    public function getAlamat()
    {
        return $alamat;// seharusnya menggunakan $this
    }
}
