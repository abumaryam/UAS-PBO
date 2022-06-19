<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class TenagaKependidikan implements Pegawai{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja()
    {

    }

    public function setNip($nip_baru)
    {
        $this->nip=$nip_baru;
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNama($nama_baru)
    {
        $this->nama=$nama_baru;
    }

    public function getNama()
    {
        return $this->nama;
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