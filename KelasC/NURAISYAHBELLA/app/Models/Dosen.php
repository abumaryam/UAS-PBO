<?php

namespace App\Models;
use illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;


class Dosen extends User implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;
    private $tugas_akhir = [];
    private $perguruan_tinggi;

    public function validasiMahasiswa()

    public function setNIP($nip){
        $this->nip = $nip; 
    }
    
    public function getNIP(){
        return $this-nip;
    }

    public function presensiMasuk()
    {

    }

    public function setNama($nama)
    {this->nama = $nama;
    
    }

    public function getNama()
    {
        return $this->nama;
    }
}



