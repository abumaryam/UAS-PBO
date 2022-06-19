<?php
namespace App\Models;
use App\Models\User;

class Dosen extends User implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;
    private $perguruanTinggi;
    

    public function __construct($nip, $nama, $no_telp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;
    }

    public function validasiMahasiswa(){

    }

    public function setPerguruanTinggi(PerguruanTinggi $value){
        $this->setPerguruanTinggi= $value;
    }

    public function getPerguruanTinggi(){
        return $this->perguruanTinggi;
    }

    public function setNip($nip){
        $this->nip = $nip;
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

    public function setNoTelp($no_telp){
        $this->noTelp=$no_telp;
    }

    public function getNoTelp(){
        return $this->noTelp;
    }
}