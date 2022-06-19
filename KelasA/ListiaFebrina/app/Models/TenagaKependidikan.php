<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Pegawai;
use App\Models\User;
class TenagaKependidikan extends User implements Pegawai
{
    use HasFactory;

    private $nip;
    private $nama;
    private $alamat;
    public $presensi_masuk;

    public function presensiMasuk()
    {

    }
    public function hitungTunjanganKinerja()
    {
        
    }
    public function setNip($nip)
    {
        $this->nip = $nip;
    }
    public function getNip()
    {
        return $nip;
    }
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $nama;
    }
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }
    public function getAlamat()
    {
        return $alamat;
    }
}
