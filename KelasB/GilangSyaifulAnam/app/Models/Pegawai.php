<?php
namespace App\Models;
use App\Models\tenagaPendidikan;
use App\Models\Dosen;

interface Pegawai {


    private function setNip(){
        $this->nip=$nip;
    }
    
    private function getNip(){
        return $this->nip;
    }
    public function presensiMasuk();
    private function setNama();
    private function getNama();

    public function changePegawai($value){
        $this->pgwi=$value;
    }

    public function setReq(){
        
    }
}