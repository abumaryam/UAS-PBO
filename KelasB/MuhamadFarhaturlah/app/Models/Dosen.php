<?php

namespace App\Models;
require_once('User.php');

use App\Pegawai;

class Dosen extends User implements Pegawai{
    private $nip;
    private $nama;
    private $no_telpn;
    public $tugasAkhir=[];

    public function validasiMahasiswa(){

    }
    public function setNip($nip){
        $this ->nip = $nip;
    }
    public function presensiMasuk(){

    }
    public function getNip(){
        return $this->nip;
    }
    public function setNama($nama){
        $this ->name = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
    public function setTugasAkhir(TugasAkhir $tgsAkhir){
        $this ->tugasakhir = $tgsAkhir;
    }
    public function getTugasAkhir(){
        return $this->$tgsAkhir;
    }
}