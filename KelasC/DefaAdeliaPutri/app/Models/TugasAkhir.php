<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class TugasAkhir{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;

    public function setId($id){

    }

    public function getId($id){

    }
    public function setJudulTA($judulTA){

    }
    public function getJudulTA($judulTA){

    }
    public function setMahasiswaTA($mahasiswaTA){

    }
    public function getMahasiswaTA($mahasiswaTA){

    }
    public function setPembimbingTA($pembimbingTA){

    }

    public function getPembimbingTA($pembimbingTA){

    }
    public function setPengujiTA($pengujiTA){

    }
    public function getPengujiTA($pengujiTA){

    }

    public function tambahTA(){
        $this->judulTA = $judulTA;
        $this->mahasiswaTA = $mahasiswaTA;
        $this->pembimbingTA = $pembimbingTA;
        $this->pengujiTA = $pengujiTA;

    }


}