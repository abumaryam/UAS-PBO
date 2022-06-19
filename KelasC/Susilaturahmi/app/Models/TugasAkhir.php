<?php
namespace App\Models;

class TugasAkhir
{
    public $id;
    public $judul;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;

    public function tambahTA()
    {
    }

    function __construct($id, $judul, $mahasiswa, $pembimbing, $penguji)
    {
        $this->id = $id;
        $this->judulTA = $judul;
        $this->mahasiswaTA = $mahasiswa;
        $this->pembimbingTA = $pembimbing;
        $this->pengujiTA = $penguji;
    }
    public function getId($id)
    {
        return $this->id;
    }
    public function getJudulTA($judul)
    {
        return $this->judulTA;
    }
    public function getMahasiswaTA($mahasiswa)
    {
        return $this->mahasiswaTA;
    }
    public function getPembimbingTA($pembimbing)
    {
        return $this->pembimbingTA;
    }
    public function getPengujiTA($penguji)
    {
        return $this->pengujiTA;
    }
}