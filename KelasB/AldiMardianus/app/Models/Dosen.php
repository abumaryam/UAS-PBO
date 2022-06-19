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
    private $tugas_akhir = [];
    private $perguruan_tinggi;

    public function validasiMahasiswa()
    {

    }
    //implementasi interface pegawai
    public function setNIP($nip){
        $this->$nip;
    }
    public function getNIP(){
        return $this->nip;
    }
    public function presensiMasuk()
    {

    }
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function getNama (){
        return $this->nama;
    }
    //constructor pribadi
    public function __construct ($nip, $nama, $no_telp)
    {
        $this->nip =$nip;
        $this->nama =$nama;
        $this->no_telp =$no_telp;
    }
    //agregasi dari class PerguruanTinggi
    public function setPerguruanTinggi(setPerguruanTinggi $perguruan_tinggi)
    {
        $this->perguruan_tinggi = $perguruan_tinggi;
    }
    public function getPerguruanTinggi()
    {
        return $this->perguruan_tinggi;
    }
    //one to many dengan Tugas Akhir
    public function setTugasAkhir(TugasAkhir $tugas_akhir)
    {
        $this->tugas_akhir[] = $tugas_akhir;
    }
    public function getTugasAkhir()
    {
        return $this->tugas_akhir;
    }
}