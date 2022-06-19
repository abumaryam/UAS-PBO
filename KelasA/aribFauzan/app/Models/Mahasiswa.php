<?php
namespace app\Models;

use app\Models\User;
use app\Models\PerguruanTinggi;

class Mahasiswa extends User {
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $perguruan_tinggi;

    public function __construct(PerguruanTinggi $namaPT){
            $this->perguruan_tinggi = $perguruan_tinggi;
    }
    
    // Setter dan Getter
    public function setNim($nim_baru){
        $this->nim = $nim_baru;
    }

    public function getNim(){
        echo "NIM Anda yang terdaftar = ", $this->nim;
    }

    public function setNama($nama_baru){
        $this->nama = $nama_baru;
    }

    public function getNama(){
        echo "Nama Anda yang terdaftar = ", $this->nama;
    }

    public function setIPK($ipk_baru){
        $this->IPK = $ipk_baru;
    }

    public function getIPK(){
        echo "IPK Anda yang terdaftar = ", $this->IPK;
    }

    public function setAlamat($alamat_baru){
        $this->alamat = $alamat_baru;
    }

    public function getAlamat(){
        echo "Alamat Anda yang terdaftar = ", $this->alamat;
    }

    public function getPerguruanTinggi(){
        echo "Perguruan Tinggi ", $this->nama, "= ", $this->perguruan_tinggi;
    }
    // END Setter dan Getter

    public function inputMakul(){
        return TRUE;
    }

    public function updateProfil(){
        echo "Update Profil......";
    }
}