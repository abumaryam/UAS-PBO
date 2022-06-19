<?php
namespace App\Models;

use App\Models\User;
use App\Models\Pegawai;

class Dosen extends User implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa(){

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
        $this->no_telp = $no_telp;
    }

    public function getNoTelp(){
        return $this->no_telp;
    }
}