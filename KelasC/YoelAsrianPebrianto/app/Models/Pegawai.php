<?php

namespace App\Models;

use App\Models\TenagaKependidikan;

interface Pegawai{
    public function setNip();
    public function presensiMasuk();
    public function getNip();
    public function setNama();
    public function getNama();

}

class TenagaKependidikan implements Pegawai{
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

class Dosen implements Pegawai{
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