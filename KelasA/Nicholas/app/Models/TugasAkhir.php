<?php

namespace App\Models;

use App\Models\Dosen;
use App\Models\Mahasiswa;

class TugasAkhir{
    public $id;
    public $namaPT;
    public $mahasiswa_TA;
    public $Pembimbing_TA;
    public $penguji_TA;

    public function tambahTA(Mahasiswa $mahasiswa_TA, Dosen $pembimbing_TA, Dosen $penguji_TA, $judul_TA){
        $this->mahasiswa_TA = $mahasiswa_TA;
        $this->pembimbing_TA = $pembimbing_TA;
        $this->penguji_TA = $penguji_TA;
        $this->judul_TA = $judul_TA;
    }
}
