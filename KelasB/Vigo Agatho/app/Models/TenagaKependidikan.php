<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pegawai;

class TenagaKependidikan extends User implements Pegawai
{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjuanganKinerja()
    {

    }

    // implementasi interface
    public function presensiMasuk()
    {
        echo "Kehadiran Diterima";
    }
    public function setNIP($nip)
    {
       $this->nip = $nip;
    }
    public function getNIP()
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
}
