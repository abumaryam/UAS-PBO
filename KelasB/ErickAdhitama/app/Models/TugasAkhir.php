<?php

namespace App\Models;

use App\Models\Mahasiswa;

class TugasAkhir{
    public $id; /*Int*/
    public $judulTA; /*String*/
    public $mahasiswaTA; /*Mahasiswa*/
    public $pembimbingTA; /*Dosen*/
    public $pengujiTA; /*Dosen*/

    public function tambahTA()
    {
        return true;
        return false;
    }

    public function getMahasiswa(Mahasiswa $mahasiswaTA)
    {
        $this->mahasiswaTA = $mahasiswaTA;
    }

    public function setMahasiswa()
    {
        return $this->mahasiswaTA;
    }

    public function setpembimbingTA(Dosen $pembimbingTA)
    {
        $this->pembimbingTA = $pembimbingTA;
    }

    public function getpembimbingTA()
    {
        return $this->$pembimbingTA;
    }

    public function setpengujiTA(Dosen $pengujiTA)
    {
        $this->pengujiTA = $pengujiTA;
    }

    public function getpengujiTA()
    {
        return $this->$pengujiTA;
    }
}