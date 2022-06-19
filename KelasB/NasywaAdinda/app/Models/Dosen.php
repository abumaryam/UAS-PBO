<?php

namespace App\Models;
require_once ('User.php');
use App\Models\TugasAkhir;
use App\Models\PerguruanTinggi;

class Dosen extends User implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;
    private $perguruantinggi;
    private $tugasakhir = []; 

    public function validasiMahasiswa(){
    
    }

    public function setTugasAkhir($tugasakhir){
        $this->tugasakhir = $tugasakhir;
    }

    public function getTugasAkhir(){
        return $this->tugasakhir;
    }

    public function setNip($nip){
        $this->nip = $nip;
    }

    public function presensiMasuk(){

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

    public function setId($perguruantinggi){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNamaPT($perguruantinggi){
        $this->namaPT = $namaPT;
    }

    public function getNamaPT(){
        return $this->getNamaPT;
    }

    public function akreditasi($perguruantinggi){
        $this->akreditasi = $akreditasi;
    }

    public function getAkreditasi(){
        return $this->getAkreditasi;
    }

    function __construct($nip, $nama, $no_telp, $tugasakhir){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;
        $this->tugasakhir = $tugasakhir;
    }
}
?>