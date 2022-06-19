<?php

namespace App\Models;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model {

    private $nip;
    private $nama;
    private $no_telp;

    public function __construct($nip_baru,$nama_baru,$no_telp_baru)
    {
        $this->nim = $nip_baru;
        $this->nama = $nama_baru;
        $this->alamat = $no_telp_baru;
    }

    public function setNip($nip_baru)
    {
        $this->nip = $nip_baru;
    }

    public function setNama($nama_baru)
    {
        $this->nama = $nama_baru;
    }

    public function setNoTelp($no_telp_baru)
    {
        $this->no_telp = $no_telp_baru;
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNoTelp()
    {
        return $this->no_telp;
    }

    public function validasiMahasiswa()
    {

    }
}