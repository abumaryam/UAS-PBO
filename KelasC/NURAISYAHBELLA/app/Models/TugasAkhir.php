<?php

namespace App\Models;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class TugasAkhir{
    public $id;
    public $judul_ta;
    public $mahasiswa_ta;
    public $pembimbing_ta;
    public $penguji_ta;

    public function tambahTA($Judul_ta, Mahasiswa $mahasiswa_ta, Dosen $pembimbing_ta, Dosen $penguji_ta)
    {
        $this->judul_ta = $judul_ta;
        $this->mahasiswa_ta = $mahasiswa_ta;
        $this->pembimbing_ta = $pembimbing_ta;
        $this->penguji_ta = $penguji_ta;
    }
}







