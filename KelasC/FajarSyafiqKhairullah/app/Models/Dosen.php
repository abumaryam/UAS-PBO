<?php
namespace App\Models;
use App\Models\perguruanTinggi;
use App\Models\TugasAkhir;

class Dosen extends Model implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa(){

    }

    public function _construct($nip, $nama, $no_telp){
        $this->nip=$nip;
        $this->nama=$nama;
        $this->no_telp=$no_telp;    
    }

    public function setNip($nip){
        $this->nip=$nip;
    }

    public function setNama($nama){
        $this->nama=$nama;
    }

    public function presensiMasuk(){

    }

    public function getNip(){
        return $nip->nip;
    }

    public function getNama(){
        return $nama->nama;
    }

    public function setPerguruanTinggi($perguruan_tinggi){
        $this->perguruan_tinggi=$perguruan_tinggi;
    }

    public function getPerguruanTinggi(){
        return $this ->perguruan_tinggi;
    }

    public function setTugasAkhir($tugas_akhir){
        $this->tugas_akhir[] = $tugas_akhir;
    }

    public function getTugasAkhir(){
        return $this ->tugas_akhir;
    }
}