<?php

namespace App\Models;

use Illuminate\Foundation\Auth\Pegawai;

class Pegawai { // DP: harusnya yang dibuat interface bukan class
    private $setNip;
    public $presensiMasuk;
    private $getNip;
    private $setNama;
    private $getNama;

    public function setNip(Nip $nip)
    {
        $this->nip = $nip;
    }

    public function __construct($presensiMasuk)
    {
        $this->presensiMasuk = $presensiMasuk
    }

    public function getNip()
    {
        return $this->getNip;
    }

    public function setNama(Nama $nma)
    {
        $this->nama = $nma;
    }

    public function getNama()
    {
        return $this->getNama;
    }
} 