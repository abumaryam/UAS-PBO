<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class TugasAkhir extends Model{
    public $id,
           $judulTA,
           $mahasiswaTA,
           $pembimbingTA,
           $pengujiTA;

    public function tambahTA(){
        return true;
    }

    public function __construct($id_baru, $judulTA_baru, Mahasiswa $mahasiswaTA, Dosen $pembimbingTA, Dosen $pengujiTA){
        $this->id = $id_baru;
        $this->judulTA = $judulTA_baru;
        $this->mahasiswaTA = $mahasiswaTA;
        $this->pembimbingTA = $pembimbingTA;
        $this->pengujiTA = $pengujiTA;
    }
}