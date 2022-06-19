<?php 

namespace App\Models;

class TugasAkhir{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA = [];
    public $pengujiTA = [];

    public function tambahTA(){

    }
    function __constuct($id, $judul, $mahasiswa, $pembimbing, $penguji){
        $this->id = $id;
        $this->judulTA = $judul;
        $this->mahasiswaTA = $mahasiswa;
        $this->pembimbingTA = $pembimbing;
        $this->pengujiTA = $penguji;
    }
    public function getID($id){
        return $this->id;
    }
    public function getjudulTA($judul){
        return $this->judulTA;
    }
    public function getmahasiswaTA($mahasiswa){
        return $this->mahasiswaTA;
    }
    public function getpembimbingTA($pembimbing){
        return $this->pembimbingTA;
    }
    public function pengujiTA($penguji){
        return $this->pengujiTA;
    }
}