<?php
namespace app\Models;

use app\Models\User;
use app\Models\Pegawai;

class TenagaKependidikan extends User implements Pegawai {
    private $nip;
    private $nama;
    private $alamat;
    private $presensi = 0;

    // Setter dan Getter
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
    
    public function getPresensi(){
        echo $this->presensi;
    }
    // END Setter dan Getter

    public function hitungTunjanganKerja(){
        echo "Hitung tunjangan kerja......";
    }

    public function presensiMasuk(){
        $this->presensi = $this->presensi + 1;
    }
}
