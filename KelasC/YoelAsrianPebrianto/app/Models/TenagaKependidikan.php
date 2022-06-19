<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenagaKependidikan extends Model {

    private $nip;
    private $nama;
    private $alamat;

    public function __construct($nip_baru,$nama_baru,$alamat_baru)
    {
        $this->nim = $nip_baru;
        $this->nama = $nama_baru;
        $this->alamat = $alamat_baru;
    }

    public function setNip($nip_baru)
    {
        $this->nip = $nip_baru;
    }

    public function setNama($nama_baru)
    {
        $this->nama = $nama_baru;
    }

    public function setAlamat($alamat_baru)
    {
        $this->alamat = $alamat_baru;
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function hitungTunjanganKerja()
    {

    }

}