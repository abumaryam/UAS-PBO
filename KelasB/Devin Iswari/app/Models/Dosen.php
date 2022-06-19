<?php

namespace App\Models;

class dosen extends User{
    private $nip;
    private $nama;
    private $no_telp;

    public function __construct($nip, $nama, $alamat){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;
    }

    public function validasiMahasiswa(){

    }
    
    public function getInfoDosen(){
        return "$this->nip, $this->nama, $this->no_telp";
    }
}

$dosen1 = new Dosen ("1131","Budi", 08544747474747);

echo "Data Dosen : ". $dosen1->getInfoDosen();