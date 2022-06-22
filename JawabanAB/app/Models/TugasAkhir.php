<?php
namespace App\Models;

use App\Models\Dosen;
use App\Models\Mahasiswa;

class TugasAkhir {
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;

    public function setMahasiswaTA(Mahasiswa $nama){
        $this->mahasiswaTA = $nama;
    }

    public function setPembimbingTA(Dosen $nama){
        $this->pembimbingTA = $nama;
    }

    public function setPengujiTA(Dosen $nama){
        $this->pengujiTA = $nama;
    }

    // karena atribut-atribut public jadi tidak perlu ada getter

    public function tambahTA(){
        return true;
    }
}