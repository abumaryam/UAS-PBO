<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PerguruanTinggi;

class Mahasiswa extends Model{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    public function inputMakul()
    {

    }

    public function updateProfil()
    {

    }

    public function setNim($nim_baru)
    {
        $this->nim=$nim_baru;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setNama($nama_baru)
    {
        $this->nama=$nama_baru;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setIPK($IPK_baru)
    {
        $this->IPK=$IPK_baru;
    }

    public function getIPK()
    {
        return $this->IPK;
    }

    public function setAlamat($alamat_baru)
    {
        $this->alamat=$alamat_baru;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }
}