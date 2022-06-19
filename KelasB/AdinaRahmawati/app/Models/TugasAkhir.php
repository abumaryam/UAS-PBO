<?php

namespace App\Models;
use App\Model\Mahasiswa;

class TugasAkhir 
{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;

    public function tambahTA()
    {
        
    }

    public function setDosen(Dosen $pembimbingTA)
    {
        $this->pembimbingTA = $pembimbingTA;
    }

    public function setPenguji(Dosen $pengujiTA)
    {
        $this->pengujiTA = $pengujiTA;
    }

    public function setMahasiswaTA(Mahasiswa $mahasiswaTA)
    {
        $this->mahasiswaTA = $mahasiswaTA;
    }
}

