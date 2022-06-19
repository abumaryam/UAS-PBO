<?php

namespace App\Models;
use Illuminate\Eloquent\Model;
use App\Model\Pegawai;
use App\Model\PerguruanTinggi;

class Dosen extends Model implements Pegawai {
    private $nip;
    private $nama;
    private $no_telp;
    
    public function __construct($id,$namaPT,$akreditasi){

    }

    public function validasiMahasiswa(){

    }

    public function setNip(){
        
    }

    public function presensi(){

    }

    public function getNip(){

    }

    public function setNama(){

    }
    public function getNama(){

    }

}