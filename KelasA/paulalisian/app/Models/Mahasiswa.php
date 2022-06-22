<?php
namespace App\Models;

use App\Models\TugasAkhir;

class Mahasiswa{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    // DP: Kurang constructor

    public function inputMakul(){}
    public function updateProfile(){}

    public function setTugasAkhir (TugasAkhir $tugas_akhir){
        $this->tugas_akhir=$tugas_akhir;
    }

    public function getTugasAkhir ()
    {
        return $this->tugas_akhir;
    }

    // DP: Kurang setter dan getter untuk atribut yang private

}