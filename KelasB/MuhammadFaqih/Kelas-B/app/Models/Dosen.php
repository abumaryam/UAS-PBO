<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pegawai;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Dosen extends User implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;
    private $id;
    private $namaPT;
    private $mahasiswaTA = [];
    

    public function validasiMahasiswa(){

    }
    public function setNip($nip){
        $this->nip = $nip;

    }
    public function presensiMasuk(){
        echo "Silahkan melakukan presensi";
    } 
    public function getNip(){
        return $this->nip;
    }
    public function setNama($nama){
        $this->nama=$nama;
    }
    public function getNama(){
        return $this->nama;
    }

    public function __construct(PerguruanTinggi $id, PerguruanTinggi $namaPT){
        $this->id = $id;
        $this->namaPT = $namaPT;
    }
   
    Public function setTugasAkhir(TugasAkhir $mahasiswaTA){
        $this->judulTA = $mahasiswaTA;
    }
    public function getTugasAkhir(){
        return $this->mahasiswaTA; 
    }
}