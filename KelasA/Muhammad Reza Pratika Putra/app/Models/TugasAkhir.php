<?php

namespace App\Models;

use App\Models\Mahasiswa;
use App\Models\Dosen;

class TugasAkhir{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;

    public function tambahTA($id, $judulTA, Mahasiswa $mahasiswaTA, Dosen $pembimbingTA, Dosen $pengujiTA)
    {
        $this->id = $id;
        $this->judulTA = $judulTA;
        $this->mahasiswaTA = $mahasiswaTA;
        $this->pembimbingTA = $pembimbingTA;
        $this->pengijiTA = $pengujiTA;
    }
}