<?php

namespace App\Models;

use App\Models\TenagaKependidikan;

class TenagaKependidikan extends User implements Pegawai{
    private $nip; /*String*/
    private $nama; /*String*/
    private $alamat; /*String*/

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
        return $this->nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getnama()
    {
        return $this-> nama;
    }
}