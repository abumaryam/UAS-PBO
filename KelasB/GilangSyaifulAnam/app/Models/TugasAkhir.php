<?php 
namespace App\Models;


class TugasAkhir{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;
    

    public function tambahTA($judulTA, Mahasiswa $mahasiswaTA, Dosen $pembimbingTA, Dosen $pengujiTA){
        $this->judulTA=$judulTA;
        $this->mahasiswaTA=$mahasiswaTA;
        $this->pembimbingTA=$pembimbingTA;
        $this->pengujiTA=$pengujiTA;
    }
}