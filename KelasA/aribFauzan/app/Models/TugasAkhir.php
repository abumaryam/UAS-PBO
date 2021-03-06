<?php
namespace app\Models;

use app\Models\Dosen;
use app\Models\Mahasiswa;

class TugasAkhir {
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA = [];

    public function setMahasiswaTA(Mahasiswa $nama){
        $this->mahasiswaTA = $nama;
    }

    public function setPembimbingTA(Dosen $nama){
        $this->pembimbingTA = $nama;
    }

    public function setPengujiTA(Dosen $nama){
        $this->pengujiTA = $nama;
    }

    public function tambahTA(){
        return TRUE;
    }
}