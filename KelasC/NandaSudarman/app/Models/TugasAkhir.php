<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;


class TugasAkhir extends Mahasiswa {
    public $id;
    public $judul_ta;
    public $mahasiswa_ta;
    public $pembimbing_ta;
    public $penguji_ta;

    public function tambahTa(){

    }
    public function __construct($id, $judul_ta, $mahasiswa_ta, $pembimbing_ta, $penguji_ta){
        $this->id = "01054";
        $this->judul_ta = "Pemograman";
        $this->$mahasiswa_ta="Sudarman";
        $this->alamat = "Pontianak";
    } 
    public function getDosen(){
        return $this->nama;
    }
    public function setMahasiswa($tugas_akhir){
    
    }
    public function getMahasiswa($tugas_akhir){
        return $this->nama;
    }
    

    
}
