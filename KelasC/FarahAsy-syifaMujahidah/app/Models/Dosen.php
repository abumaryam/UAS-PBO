<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;
use App\Models\PerguruanTinggi;

class Dosen implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa()
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

    public function setNoTelp($no_telp_baru)
    {
        $this->no_telp=$no_telp_baru;
    }

    public function getNoTelp()
    {
        return $this->no_telp;
    }
}