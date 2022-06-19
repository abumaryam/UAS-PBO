<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 
use App\Models\perguruanTinggi;
use App\Models\TugasAkhir;

class Dosen extends Model implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa(){

    }

    //implementasi interface pegawai
    public function setNip($nip){
        $this->nip = $nip;
    }
    public function presensiMasuk(){
        
    }
    public function getNip($nip){
        return $this->nip;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama($nama){
        return $this->nama;
    }

    //construct pribadi
    public function __construct($nip,$nama,$no_telp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;

    }

    //agregasi dari class perguruan tinggi
    public function setPerguruanTinggi(PerguruanTinggi $perguruan_tinggi){
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    public function getPerguruanTinggi(){
        return $this->perguruan_tinggi;
    }

    //one to Many Tugas Akhir
    public function setTugasAkhir(TugasAkhir $tugas_akhir){
        $this->tugas_akhir = $tugas_akhir;
    }

    public function getTugasAkhir(){
        return $this->tugas_akhir;
    }
}