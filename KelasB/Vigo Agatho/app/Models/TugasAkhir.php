<?php

namespace App\Models;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class TugasAkhir
{
    public $id;
    public $judul_ta;
    public $mahasiswa_ta;
    public $pembimbing_ta;
    public $penguji_ta;

    public function tambahTA($judul_ta,Mahasiswa $mahasiswa_ta, Dosen $pembimbing_ta, Dosen $penguji_ta)
    {
        $this->judul_ta = $judul_ta;
        $this->mahasiswa = $mahasiswa_ta;
        $this->pembimbing_ta = $pembimbing_ta;
        $this->penhuji_ta = $penguji_ta;
    }


}