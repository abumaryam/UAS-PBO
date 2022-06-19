<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Dosen;


class TugasAkhir extends Model {
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;

    public function tambahTA(){

    }

    public function setMahasiswaTA(Mahasiswa $value){
        $this->mahasiswaTA = $value;
    }

    public function setPembimbingTA(Dosen $value){
        $this->pembimbingTA = $value;
    }

    public function setPengujiTA(Dosen $value){
        $this->pengujiTA = $value;
    }
}