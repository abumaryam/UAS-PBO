<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Dosen extends Model implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;
    private $perguruan_tinggi;
    private $tugas_akhir = [];

    public function __contruct($nip,$nama,$no_telp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function validasiMahasiswa(){

    }

    public function setPerguruanTinggi(PerguruanTinggi $value){
        $this->perguruan_tinggi = $value;
    }

    public function getPerguruanTinggi(){
        return $this->perguruan_tinggi;
    }

    public function setTugasAkhir(TugasAkhir $value){
        $this->tugas_akhir[] = $value;
    }

    public function getTugasAkhir(){
        return $this->tugas_akhir;
    }

    public function setNip($nip){
        $this->nip = $nip;
    }

    public function pesensiMasuk(){

    }

    public function getNip(){
        return $this->nip;
    }
    
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
}
