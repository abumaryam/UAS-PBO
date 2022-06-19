<?php
namespace App\Models;
use App\Models\Mahasiswa;
use APP\Models\Dosen;

class TugasAkhir{
    public $id;
    public $judulTA;
    public $pembimbingTA;
    public $pengujiTA;

    public function tambahTA($judulTA, Mahasiswa $mahasiswaTA, Dosen $pembimbingTA, Dosen $pengujiTA)

    {
        $this ->judulTA = $judulTA;
        $this ->mahasiswaTA = $mahasiswaTA;
        $this ->pembimbingTA = $pembimbingTA;
        $this ->pengujiTA = $pengujiTA;
    }
}