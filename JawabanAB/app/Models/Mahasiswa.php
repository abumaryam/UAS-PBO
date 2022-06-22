<?php
namespace App\Models;

use App\Models\User;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Mahasiswa extends User {
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $perguruan_tinggi;
    private $tugas_akhir;

    public function __construct(PerguruanTinggi $perguruan_tinggi){
        $this->perguruan_tinggi = $perguruan_tinggi;
    }
    
    public function setNim($nim_baru){
        $this->nim = $nim_baru;
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

    public function setIPK($ipk){
        $this->IPK = $ipk;
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

    public function getPerguruanTinggi(){
        return $this->perguruan_tinggi;
    }

    public function setTugasAkhir(TugasAkhir $tugas_akhir){
        $this->tugas_akhir = $tugas_akhir;
    }

    public function getTugasAkhir(){
        return $this->tugas_akhir;
    }

    public function inputMatkul(){
        return TRUE;
    }

    public function updateProfil(){
        echo "Memperbaharui profil";
    }
}