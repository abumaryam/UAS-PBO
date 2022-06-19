<?php

namespace App\Models;

class TugasAkhir{
    private $id;
    private $judulTA;
    private $mahasiswaTA;
    private $pembimbingTA = [];
    private $pengujiTA = [];

    public function tambahTA(){
    }

    public function getID($id){
        return $this->id;
    }

    public function juduTA($judul){
        return $this->judulTA;
    }

    public function mahasiswaTA($mahasiswa){
        return $this->mahasiswaTA;
    }

    public function pembimbingTA($pembimbing){
        return $this->pembimbingTA;
    }
 
    public function pengujiTA($penguji){
        return $this->pengujiTA;
    }
    
    function __construct($id, $judul, $mahasiswa, $pembimbing, $penguji){
        $this->id = $id;
        $this->judulTA = $judul;
        $this->mahasiswaTA = $mahasiswa;
        $this->pembimbingTA = $pembimbing;
        $this->pengujiTA = $penguji;
    }
}
?>