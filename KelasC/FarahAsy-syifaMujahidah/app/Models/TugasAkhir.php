<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class TugasAkhir extends Model{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;

    public function tambahTA(){
        
    }

    public function __construct($id_baru,$judulTA_baru)
    {
        $this->id=$id_baru;
        $this->judulTA=$judulTA_baru;
    }

    public function setMahasiswaTA(Mahasiswa $mhs)
    {
        $this->mahasiswaTA=$mhs;
    }

    public function getMahasiswaTA()
    {
        return $this->mahasiswaTA;
    }

    public function setPembimingTA(Dosen $pbb)
    {
        $this->pembimbingTA=$pbb;
    }

    public function getPembimbingTA()
    {
        return $this->pembimbingTA;
    }

    public function setPengujiTA(Dosen $pgj)
    {
        $this->pengujiTA=$pgj;
    }

    public function getPengujiTA()
    {
        return $this->pengujiTA;
    }
}