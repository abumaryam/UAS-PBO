<?php

class TugasAkhir {
    public $id, $judulTA, $mahasiswaTA, $pembimbingTA, $pengujiTA;


    public function __construct($id, $judulTA, Mahasiswa $mahasiswaTA, Dosen $pembimbingTA, Dosen $PengujiTA)
    {
        $this->id = $id;
        $this->judulTA = $judulTA;
        $this->mahasiswaTA = $mahasiswaTA;
        $this->pembimbingTA = $pembimbingTA;
        $this->pengujiTA = $pengujiTA;
    }

    public function tambahTA()
    {

    }

    Public function setMahasiswaTA(Mahasiswa $value)
        $this->mahasiswaTA = $value;
    }

    public function getMahasiswaTA()
    {
        return $this->mahasiswaTA;
    }


}