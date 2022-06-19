<?php
namespace App\Models;

use App\Models\Mahasiswa;
use App\Models\Dosen;

class TugasAkhir{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA = [];
    public $pengujiTA = [];

    public function tambahTA(){
        
    }

    public function setMahasiswa(Mahasiswa $mhsw){
        $this->mahasiswaTA = $mhsw;
    }

    public function getMahasiswa(){
        return $this->mahasiswaTA;
    }

    public function setPembimbing(Dosen $dsn){
        $this->pembimbingTA[] = $dsn;
    }

    public function getPembimbing(){
        return $this->pembimbingTA;
    }

    public function setPenguji(Dosen $dsn){
        $this->pengujiTA[] = $dsn;
    }

    public function getPenguji(){
        return $this->pengujiTA;
    }
}