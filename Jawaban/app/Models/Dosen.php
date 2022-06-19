<?php
namespace App\Models;

use App\Models\User;
use App\Models\Pegawai;
use App\Models\TugasAkhir;
use App\Models\PerguruanTinggi;

class Dosen extends User implements Pegawai {
    private $nip;
    private $nama;
    private $no_telp;
    private $perguruan_tinggi;

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
        // masuk
    }

    public function setTugasAkhir(TugasAkhir $judulTA){
        $this->tugas_akhir = $judulTA;
    }
    // END Setter dan Getter


    public function validasiMahasiswa(){
        echo "Validasi Mahasiswa......";
    }

    public function setPerguruanTinggi(PerguruanTinggi $perguruan_tinggi){
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    public function getPerguruanTinggi(){
        return $this->perguruan_tinggi;
    }
}