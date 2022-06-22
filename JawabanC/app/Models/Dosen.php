<?php
namespace App\Models;

use App\Models\Pegawai;
use App\Models\TugasAkhir;
use App\Models\PerguruanTinggi;
use Illuminate\Database\Eloquent\Model;


class Dosen extends Model implements Pegawai {
    private $nip;
    private $nama;
    private $no_telp;
    private $perguruan_tinggi;
    public  $tugas_akhir = [];

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

    public function setNoTelp($no_telp){
        $this->no_telp = $no_telp;
    }

    public function getNoTelp(){
        return $this->no_telp;
    }
    
    public function setTugasAkhir(TugasAkhir $tugas_akhir){
        $this->tugas_akhir[] = $tugas_akhir;
    }
    
    public function setPerguruanTinggi(PerguruanTinggi $perguruan_tinggi){
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    public function getPerguruanTinggi(){
        return $this->perguruan_tinggi;
    }

    public function presensiMasuk(){
        // masuk
    }

    public function validasiMahasiswa(){
        echo "Melakukan validasi data mahasiswa";
    }

}