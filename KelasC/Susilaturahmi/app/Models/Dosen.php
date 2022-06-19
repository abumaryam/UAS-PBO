<?php
namespace App\Models;
require_once('User.php');
use App\Pegawai;

class Dosen extends Pengguna implements Pegawai 
{
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa()
    {
    }
    public function setNip($nip)
    {
        $this->nip = $nip;
    }
    public function getNip()
    {
        return $this->nip;
    }
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function setNoTelp($no_telp_baru)
    {
        $this->no_telp = $no_telp_baru;
    }
    public function getNoTelp()
    {
        return $this->no_telp;
    }
}
