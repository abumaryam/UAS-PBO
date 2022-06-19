<?php
namespace App\Models;

class Mahasiswa extends User
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    public $TugasAkhir = [];

    public function inputMakul()
    {

    }

    public function updateProfil()
    {

    }

    public function setTugasAkhir(TugasAkhir $tugasakhir)
    {
        $this->tugasAkhir = $tugasakhir;
    }

    public function getTugasAkhir(TugasAkhir $tugasakhir)
    {
        return $this->tugasakhir;
    }

    function __construct($nim, $nama, $IPK, $alamat)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
    }
}