<?php 

namespace App\Models;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class TugasAkhir{
    public $id;
    public $judul_ta;
    public $mahasiswa_ta;
    public $pembimbing_ta;
    public $penguji_ta;

    public function tambahTA(){
        return true;
        return false;
    }

    public function setMahasiswa(Mahasiswa $mahasiswa_ta){
        $this->mahasiswa_ta = $mahasiswa_ta;
    }

    public function getMahasiswa(){
        return $this->mahasiswa_ta;
    }

    public function setDosen(Dosen $pembimbing_ta){
        $this->pembimbing_ta = $pembimbing_ta;
    }

    public function setPenguji(Dosen $penguji_ta){
        $this->penguji_ta = $penguji_ta;
    }
}