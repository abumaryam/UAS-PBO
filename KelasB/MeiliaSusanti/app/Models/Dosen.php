<?php

namespace App\Models;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Dosen extends User implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;
    private $judul_ta = [];
    private $mahasiswa_ta = [];
    private $perguruan_tinggi;

    public function validasiMahasiswa(){
        //
    }

    public function __construct($nip,$nama,$no_telp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;
    }

    public function setPerguruanTinggi(PerguruanTinggi $perguruan_tinggi){
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    public function getPerguruanTinggi(){
        return $this->perguruan_tinggi;
    }

    public function setTugasAkhir(TugasAkhir $tugas_akhir){
        $this->tugas_akhir[] = $tugas_akhir;
    }

    public function getTugasAkhir(){
        return $this->tugas_akhir;
    }
}
