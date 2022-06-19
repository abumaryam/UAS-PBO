<?php

namespace App\Models;

use App\Models\Mahasiswa;
use App\Models\Dosen;

class TugasAkhir{
    public $id;
    public $judul_ta;
    public $mahasiswa_ta;
    public $pembimbing_ta;
    public $penguji_ta;

    public function setMahasiswa(Mahasiswa $mhsswa)
    {
        $this->mahasiswa = $mhsswa;
    }
    public function setDosen(Dosen $dsn)
    {
        $this->dosen = $dsn;
    }

    public function getMahasiswa()
    {
        return $this->mahasiswa;
    }
    public function getDosen()
    {
        return $this->dosen;
    }
}