<?php
namespace app\Models;

use app\Models\User;
use app\Models\Pegawai;
use app\Models\TugasAkhir;

class Dosen extends User implements Pegawai {
    private $nip;
    private $nama;
    private $no_telp;
    private $presensi = 0;
    public $tugas_akhir = [];

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

    public function setNoTelp($no_telp_baru){
        $this->no_telp = $no_telp_baru;
    }

    public function getNoTelp(){
        echo "Nomor Telepon Anda yang terdaftar = ", $this->no_telp;
    }

    public function presensiMasuk(){
        $this->presensi = $this->presensi + 1;
    }

    public function setTugasAkhir(TugasAkhir $judulTA){
        $this->tugas_akhir = $judulTA;
    }
    // END Setter dan Getter

    public function getPresensi(){
        echo $this->presensi;
    }

    public function validasiMahasiswa(){
        echo "Validasi Mahasiswa......";
    }
}