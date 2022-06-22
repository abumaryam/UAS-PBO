<?php

namespace App\Models;

class TugasAkhir{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA =[];
    public $pengujiTA=[];

    public function tambahTA(){

    }

    public function __construct($id, $judulTA, $mahasiswaTA, $pembimbingTA, $pengujiTA){
        $this->id = $id;
        $this->judulTA = $judulTA;
        $this->mahasiswaTA = $mahasiswaTA;
        $this->pembimbingTA = $pembimbingTA;
        $this->pengujiTA = $pengujiTA;
    }

    public function getId($id){
        return $this->id;
    }

    public function judulTA($judulTA){
        return $this->judulTA;
    }

    public function setMahasiswaTA(Mahasiswa $mahasiswa){
        $this->mahasiswaTA = $mahasiswa;
    }

    public function getMahasiswaTA(){
        return $this->mahasiswaTA;
    }

    public function setPembimbingTA(Dosen $dosen){
        $this->pembimbingTA = $dosen;
    }

    public function getPembimbingTA(){
        return $this->pembimbingTA;
    }

    public function setPengujiTA(Dosen $dosen){
        $this->pengujiTA = $dosen;
    }

    public function getPengujiTA(){
        return $this->pengujiTA;
    }
}