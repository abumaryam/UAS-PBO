<?php

namespace App\Models;

require_once('Model.php');

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
    function __construct($id, $judul, $mahasiswa, $pembimbing, $penguji)
    {
        $this->id = $id;
        $this->judulTA = $judul;
        $this->mahasiswaTA = $mahasiswa;
        $this->pembimmbingTA = $pembimbing;
        $this->pengujiTA = $penguji;
    }
    public function getID($id)
    {
        return $this->id;
    }
    public function judulTA($judul)
    {
        return $this->judulTA;
    }
    public function mahasiswaTA($mahasiswa)
    {
        return $this->mahasiswaTA;
    }
    public function pembimbingTA($pembimbing)
    {
        return $this->pembimbingTA;
    }
    public function pengujiTA($penguji)
    {
        return $this->pengujiTA;
    }
}