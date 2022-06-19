<?php

namespace App\Models;
use Illuminate\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class TugasAkhir extends Model{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;
    private $mahasiswa;
    private $dosen;

    public function tambahTA(){

    }

    public function setMahasiswa(){

    }

    public function getMahasiswa(){

    }

    
    public function setDosen(){

    }

    public function getDosen(){

    }
}