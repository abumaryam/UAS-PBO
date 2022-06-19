<?php
namespace App\Models;

use App\Models\Pegawai;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;
use App\Models\User;

 class Dosen extends User implements Pegawai{
     private $nip;
     private $nama;
     private $no_telp;
     private $tugas_akhir=[];
     private $perguruan_tinggi;

     public function validasiMahasiswa(){

     }
     private  function setNip(){
         $this->nip = $nip;
     }
     private function getNip(){
         return $this->nip;
     }
     public function presensiMasuk(){
       
     }
     private function setNama(){
        $this->nama = $nama;
     }
     private function getNama(){
        return $this->nama;
     }
     public function __construct($nip,$nama,$no_telp,$tugas_akhir,$perguruan_tinggi){
        $this->nip=$nip;
        $this->nama=$nama;
        $this->no_telp=$no_telp;
        
     }

     public function setPerguruanTinggi (PerguruanTinggi $perguruan_tinggi){
        $this->perguruan_tinggi=$perguruan_tinggi;
     }

     public function getPerguruanTinggi(){
         return $this->getPerguruanTinggi;
     }

     public function setTugasAkhir (TugasAkhir $tugas_akhir){
        $this->tugas_akhir[]=$tugas_akhir;
     }

     public function getTugasAkhir(){
         return $this->getPerguruanTinggi;
     } 

    
 }