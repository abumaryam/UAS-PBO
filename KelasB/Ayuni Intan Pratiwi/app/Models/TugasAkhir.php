<?php 

namespace App\Models;

class TugasAkhir
{
    public $id;
    public $judulTA;
    public $mahasiswaTa;
    public $pembimbingTa = [];
    public $pengujiTA =  [];
    
    public function tambahTA()
    {

    }
    function __construct($id, $judul, $mahasiswa, $pembimbing, $penguji)
    {
        $this->id = $id;
        $this->judulTA = $judul;
        $this->mahasiswaTA = $mahasiswa;
        $this->pembimbingTA= $mahasiswa;
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
    public function mahasiswaTA($mahasiwa)
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