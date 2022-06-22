<?php

namespace App\Models;

class Mahasiswa extends User
{
    private $id;
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;
    private $tugas_akhir;
    public $nama_pt;

    public function __construct($nim, $nama, $alamat, PerguruanTinggi $nama_pt)
    {

    }

    public function geNim()
    {

    }

    public function getNama()
    {

    }

    public function getAlamat()
    {

    }

    public function setId($id)
    {

    }

    public function setIPK($ipk)
    {

    }

    public function getIPK()
    {

    }

    public function setTA(TugasAkhir $ta)
    {

    }
    public function inputMatkul()
    {

    }

    public function updateProfil()
    {

    }

}