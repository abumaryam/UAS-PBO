<?php
namespace App\Models;

use App\Models\Mahasiswa;
use App\Models\Dosen;

class TugasAkhir{
    public $id;
    public $judul_TA;
    public $mahasiswa_TA;
    public $pembimbing_TA;
    public $penguji_TA;

    public function tambahTA ($judul_TA, Mahasiswa $mahasiswa_TA, Dosen $pembimbing_TA, Dosen $penguji_TA)
    {
        $this->judul_TA = $judul_TA;
        $this->mahasiswa_TA = $mahasiswa_TA;
        $this->pembimbing_TA = $pembimbing_TA;
        $penguji->penguji_TA = $penguji_TA;
    }
}