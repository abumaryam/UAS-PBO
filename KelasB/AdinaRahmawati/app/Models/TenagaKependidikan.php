<?php
namespace App\Models;
class TenagaKependidikan extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungtTunjanganKinerja()
    {

    }
    
    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function getNip()
    {

    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {

    }

    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    public function getAlamat()
    {

    }
}