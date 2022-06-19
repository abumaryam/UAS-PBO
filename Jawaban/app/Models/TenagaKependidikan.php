<?php
namespace App\Models;

use App\Models\User;
use App\Models\Pegawai;

class TenagaKependidikan extends User implements Pegawai {
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja(){
        echo "Hitung tunjangan kerja......";
    }
    
    public function presensiMasuk(){
        // isi
    }
    public function setNip($nip_baru){
        $this->nip = $nip_baru;
    }

    public function getNip(){
        echo "NIP Anda yang terdaftar = ", $this->nip;
    }

    public function setNama($nama_baru){
        $this->nama = $nama_baru;
    }

    public function getNama(){
        echo "Nama Anda yang terdaftar = ", $this->nama;
    }

    public function setAlamat($alamat_baru){
        $this->alamat = $alamat_baru;
    }

    public function getAlamat(){
        echo "Alamat Anda yang terdaftar = ", $this->alamat;
    }
    

}
