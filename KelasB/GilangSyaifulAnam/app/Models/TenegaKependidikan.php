<?php 
namespace App\Models;

class TenagaKependidikan extends User implements Pegawai{
    private $nip;
    private $nama;
    private $alamat;


    
    public function hitungTunjanganKinerja(Pegawai $pegawai){
        $pegawai->changePegawai($pgwi);
    }
    
    private  function setNip($nip){
        $this->nip=$nip;

    }

    private function getNip(){
        return $this->nip;
    }
    public function presensiMasuk(){

    }
    private function setNama($nama){
        $this->nama=$nama;
    }
    private function getNama(){
        return $this->nama;
    }
}