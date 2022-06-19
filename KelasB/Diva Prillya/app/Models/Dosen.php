<?php

namespace App\Models;
require_once('User.php');
use App\Pegawai;

class Dosen extends User implements Pegawai
{
    private $nip;
    private $nama;
    private $no_telp;
    private $tugas_akhir = [];
    private $perguruan_tinggi;

    public function validasiMahasiswa(){

    }
    public function __construct($nip,$nama,$no_telp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;
    }
    public function setNip($nip){
        $this->nip =$nip;
    }
    public function presensiMasuk(){}

    public function getNip ($nip){
        return $this-> nip;
    }
    public function setNama($nama){
        $this->nama =$nama;
    }
    public function getNama ($nama){
        return $this-> nama;
    }
    public function setTugasAkhir (TugasAkhir $tugas_akhir){
        $this->tugas_akhir = $tugas_akhir;
    }
    public function getTugasAkhir(){
        return $this->tugas_akhir;
    }
    public function setId(PerguruanTinggi $id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNamaPT(PerguruanTinggi $namaPT){
        $this->id=$namaPT;
    }
    public function getNamaPT(){
        return $this->namaPT;
    }
    public function setAkreditasi(PerguruanTinggi $akreditasi){
        $this->id=$id;
    }
    public function getAkreditasi(){
        return $this->akreditasi;
    }
}


?>
