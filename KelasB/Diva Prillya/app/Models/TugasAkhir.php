<?php
namespace App\Models;
use App\Mahasiswa;
use App\Dosen;
class TugasAkhir
{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA = [];
    public $pengujiTA = [];

    public function tambahTA(){

    }

    public function setMahasiswa(Mahasiswa $mhs){
        $this -> mahasiswa = $mhs;
    }
    public function getMahasiswa (){
        return $this -> mahasiswa;
    }
    public function setDosen(Dosen $dsn){
        $this -> dosen = $dsn;
    }
    public function getDosen (){
        return $this -> dosen;
    }



}