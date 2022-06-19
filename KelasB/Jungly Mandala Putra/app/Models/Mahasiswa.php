<?php
namespace App\Models;
use App\Models\TugasAkhir;

class Mahasiswa extends User{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    public function inputMatkul(){}
    public function updateProfil(){}

    public function setNim($nim_baru){}
    public function getNim()
    {
        return $this->nim;
    }

    public function setNama($nama_baru)
    {}
    public function getNama()
    {
        return $this->nama;
    }

    public function setIPK($IPK_baru){}
    public function getIPK()
    {
        return $this->IPK;
    }

    public function setAlamat($alamat_baru)
    {}
    public function getAlamat()
    {
        return $this->Alamat;
    }

}