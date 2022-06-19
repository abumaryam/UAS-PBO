<?php
namespace App\Models;

class TenagaKependidikan extends User implements Pegawai{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja(){}

    public function setNip($nip_baru){}
    public function getNip()
    {
        return $this->nip;
    }

    public function setNama($nama_baru)
    {}
    public function getNama()
    {
        return $this->nama;
    }

    public function setAlamat($alamat_baru)
    {}
    public function getAlamat()
    {
        return $this->Alamat;
    }
}