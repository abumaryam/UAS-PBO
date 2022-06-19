<?php

namespace App\Models;

use Illuminate\Foundation\Auth\Dosen;

class Dosen{
    private $nip;
    private $nama;
    private $no_telp;

    public function __construct($nip,$nama)
    {
        $this->nip = $nip;
        $this->nama = $nama;
    }

    public function setNo_telp(No_telp $no_tlp)
    {
        $this->no_telp = $no_tlp;
    }

    public function getNo_telp()
    {
        return $this->no_telp;
    }

} 
