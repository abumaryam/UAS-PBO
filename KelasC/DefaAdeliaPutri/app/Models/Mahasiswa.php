<?php 

namespace App\Models;

use App\Models\TugasAkhir;
use Illuminate\Database\Eloquent\Model; 

class Mahasiswa extends Model{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    public function inputMakul(){

    }

    public function updateProfil(){

    }

    //construct dengan perguruan tinggi dan agar diperoleh tugas akhir
    public function __construct($nim, $nama,$IPK, $alamat, PerguruanTinggi $perguruan_tinggi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
        $this->perguruan_tinggi = $perguruan_tinggi;

    }

    //one to one tugas akhir 
    public function setTugasAkhir(TugasAkhir $tugas_akhir){
        $this->tugas_akhir = $tugas_akhir;
    }

    public function getTugasAkhir(){
        return $this->tugas_akhir;
    }
}