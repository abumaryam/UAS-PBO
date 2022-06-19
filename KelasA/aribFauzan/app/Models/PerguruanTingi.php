<?php
namespace app\Models;

use app\Models\Dosen;
use app\Models\Mahasiswa;

class PerguruanTinggi {
    public $id;
    public $namaPT;
    protected $akreditasi;
    private $mahasiswa = [];
    private $Dosen = [];

    public function setMahasiswa(Mahasiswa $nama){
        $this->mahasiswa = $nama;
    }

    public function setDosen(Dosen $nama){
        $this->dosen = $nama;
    }

    public function getAkreditasi(){
        echo "Akreditasi Kampus yang terdaftar saat ini = ", $this->akreditasi;
    }

    public function getMahasiswa(){
        echo "Mahasiswa Kampus yang terdaftar saat ini = ", $this->mahasiswa;
    }

    public function getDosen(){
        echo "Dosen Kampus yang terdaftar saat ini = ", $this->dosen;
    }

    public function registerMaba() {
        echo "Registrasi Mahasiswa Baru......";
    }
}