<?php

namespace App\Models;

use App\Models\TugasAkhir;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model {

    private $nim;
    private $nama;
    private $ipk;
    private $alamat;

    public function __construct($nim_baru,$nama_baru,$ipk_baru,$alamat_baru)
    {
        $this->nim = $nim_baru;
        $this->nama = $nama_baru;
        $this->ipk = $ipk_baru;
        $this->alamat = $alamat_baru;
    }

    public function setNim($nim_baru)
    {
        $this->nim = $nim_baru;
    }

    public function setNama($nama_baru)
    {
        $this->nama = $nama_baru;
    }

    public function setIpk($ipk_baru)
    {
        $this->ipk = $ipk_baru;
    }

    public function setAlamat($alamat_baru)
    {
        $this->alamat = $alamat_baru;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getIpk()
    {
        return $this->ipk;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function inputMatkul()
    {

    }

    public function updateProfil()
    {

    }
}