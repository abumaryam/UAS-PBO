<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Model\PerguruanTinggi;

class Mahasiswa extends  Model{
    private $mim;
    private $nama;
    private $ipk;
    private $alamat;

    public function inputMatkul() {

    }
    public function updateProfil() {

    }
    public function __construct($nim, $nama, $ipk, $alamat){
        $this->nim = "H1101201054";
        $this->nama = "Nanda Sudarman";
        $this->ipk = 3.4;
        $this->alamat = "Pontianak";
    } 
    public function getPerguruanTinggi(){
        return $this->nama;
    }
    public function setTugasakhir($tugas_akhir){

    }
    public function getTugasakhir($tugas_akhir){
        return $this->nama;
    }


}