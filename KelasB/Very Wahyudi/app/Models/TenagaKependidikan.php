<?php
namespace App\Models;

Use App\Pegawai;

class TenagaKependidikan extends User implements Pegawai{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja()
    {

    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function presensiMasuk()
    {
        
    }
    public function getNip()
    {
        $this->nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}