<?php

namespace App\Models;
require_once ('User.php');
use App\Pegawai;

class TugasAkhir
{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA = [];
    public $pengujiTA = [];

    public function tambahTA()
    {

    }

    function __construct($id, $judulTA, $mahasiswaTA, $pembimbingTA, $pengujiTA)
    {
        $this->id = $id;
        $this->judulTA = $judulTA;
        $this->mahasiswaTA = $mahasiswaTA;
        $this->pembimbingTA = $pembimbingTA;
        $this->pengujiTA =$pengujiTA;
    }

    public function judulTA($judul)
    {
        return this->judulTA;
    }

    public function getID($id)
    {
        return this->id;
    }

    public function mahasiswaTA($mahasiswa)
    {
        return this->mahasiswaTA;
    }

    public function pembimbingTA($pembimbing)
    {
        return this->pembimbingTA;
    }

    public function pengujiTA($penguji)
    {
        return this->pengujiTA;
    }
}