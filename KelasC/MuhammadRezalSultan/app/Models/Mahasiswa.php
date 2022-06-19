<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Mahasiswa extends Model{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $perguruan_tinggi;
    private $tugas_akhir;

    public function __contruct($nim,$nama,$IPK,$alamat,PerguruanTinggi $perguruan_tinggi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
        $this->alamat = $perguruan_tinggi;
    }

    public function inputMakul(){

    }

    public function updateProfile(){

    }

    public function setTugasAkhir(TugasAkhir $value){
        $this->tugas_akhir = $value;
    }

    public function getPerguruanTinggi(){
        return $this->tugas_akhir;
    }
}
