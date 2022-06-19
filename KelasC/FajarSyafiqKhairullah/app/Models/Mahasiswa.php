<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\TugasAkhir;

class Mahasiswa extends Model {
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    public function inputMatkul(){

    }

    public function updateProfile(){

    }

    public function _construct($nim, $nama, $IPK, $alamat){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
    }
}

