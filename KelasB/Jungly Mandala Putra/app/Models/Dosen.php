<?php
namespace App\Models;

class Dosen extends User implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa(){}

    public function setNip($nip_baru){
    }
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

    public function setNo_telp($no_telp_baru)
    {}
    public function getNo_telp()
    {
        return $this->no_telp;
    }
}
