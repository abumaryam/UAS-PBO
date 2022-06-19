<?php

namespace App\Models;

class TugasAkhir{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $PengujiTA;

    public function tambahTA(){
        return TRUE;
        return FALSE;
    }

    public function __construct($judulTA, Mahasiswa $mahasiswaTA, Dosen $pembimbingTA, Dosen $PengujiTA){
        $this->judulTA=$judulTA;
        $this->mahasiswaTA=$mahasiswaTA;
        $this->pembimbingTA=$pembimbingTA;
        $this->pengujiTA=$pengujiTA;
    }
}