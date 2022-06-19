<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Mahasiswa extends Model{
    private $nim,
            $nama,
            $IPK,
            $alamat,
            //Karena Class Mahasiswa Memiliki hubungan one to one dengan class TugasAkhir dan hubungan relasi agregasi dengan class PerguruanTinggi
            $perguruanTinggi,
            $tugasAkhir;

    public function inputMatkul(){
        return true;
    }

    public function updateProfil(){

    }

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function getNim(){
        return $this->nim;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setIPK($IPK){
        $this->IPK = $IPK;
    }

    public function getIPK(){
        return $this->IPK;
    }

    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }

    public function getAlamat(){
        return $this->alamat;
    }

    // Hubungan Relasi Agregasi dengan class PerguruanTinggi
    public function __construct($nim_baru, $nama_baru, $IPK_baru, $alamat_baru, PerguruanTinggi $perguruanTinggi_baru){
        $this->nim = $nim_baru;
        $this->nama = $nama_baru;
        $this->IPK = $IPK_baru;
        $this->alamat = $alamat_baru;
        $this->perguruanTinggi = $perguruanTinggi_baru;
    }

    public function setTugasAkhir(TugasAkhir $tugasAkhir){
        $this->tugasAkhir = $tugasAkhir;
    }

    public function getTugasAkhir(){
        return $this->tugasAkhir;
    }
}