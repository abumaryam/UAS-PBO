<?php

namespace App\Models;

use App\Models\TugasAkhir;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $tugas_akhir;

    public function inputMakul()
    {

    }
    public function updateProfil()
    {

    }
    //construct perguruan tinggi
    public function __construct($nim, $nama, $IPK, $alamat, PerguruanTinggi $perguruan_tinggi)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    //relasi one to one dengan tugas akhir
    public function setTugasAkhir(TugasAkhir $tugas_akhir)
    {
        $this->tugas_akhir = $tugas_akhir;
    }
    public function getTugasAkhir()
    {
        return $this->tugas_akhir;
    }
}