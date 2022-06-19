<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Dosen extends Model implements Pegawai{
    private $nip,
            $nama,
            $no_telp,
            // Karena Agregasi dengan Class PerguruanTinggi
            $perguruanTinggi,
            // Memiliki relasi dengan Class TugasAkhir
            $tugasAkhir;

    public function validasiMahasiswa(){

    }

    public function setNip($nip){
        $this->nip = $nip;
    }

    public function getNip(){
        return $this->nip;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setNo_telp($no_telp){
        $this->no_telp = $no_telp;
    }

    public function getNo_telp(){
        return $this->no_telp;
    }

    public function __construct($nama_baru, $nip_baru, $no_telp_baru){
        $this->nip = $nip_baru;
        $this->nama = $nama_baru;
        $this->no_telp = $no_telp_baru;
    }

    public function setPerguruanTinggi(PerguruanTinggi $perguruanTinggi){
        $this->perguruanTinggi = $perguruanTinggi;
    }

    public function getPerguruanTinggi(){
        return $this->PerguruanTinggi;
    }

    public function setTugasAkhir(TugasAkhir $tugasAkhir){
        $this->tugasAkhir = $tugasAkhir;
    }

    public function getTugasAkhir(){
        return $this->tugasAkhir;
    }
}