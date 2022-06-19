<?php

namespace App\Models;
Use Illuminate\Database\Eloquent\Model;
Use App\Models\PerguruanTinggi;
Use App\Models\TugasAkhir;

Class TugasAkhir extends Mahasiswa{
    public $id;
    public $judul_ta;
    public $mahasiswa_ta;
    public $pembimbing_ta;
    public $penguji_ta;

    public function tambahTa() {

    }

    public function __construct($id, $judul_ta, $mahasiswa_ta, $pembimbing_ta, $penguji_ta) {
        $this->id = 1122;
        $this->judul_ta = "Membangun Semangat Mahasiswa";
        $this->mahasiswa =$mahasiswa;
        $this->pembimbing_ta = $dosen;
        $this->penguji_ta = $dosen;
    }

    public function setDosen ($dosen) {
    
    }

    public function getDosen () {
        return $this->nama;
    }

    public function setMahasiswa ($mahasiswa) {
    
    }

    public function getMahasiswa () {
        return $this->nama;

    }
}