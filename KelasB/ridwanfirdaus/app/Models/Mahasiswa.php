<?php
namespace Models;

class Mahasiswa extends User {
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;
    private $nama_PT;

    public function __construct($nim,$nama,PerguruanTinggi $nama_PT )
    {
        $this->nim=$nim;
        $this->nama=$nama;
        $this->nama_PT=$nama_PT;
    }

    public function inputmatkul()
    {
        echo "Ini adalah fungsi input matkul";
    }

    public function updateProfil()
    {
        echo "Ini adalah fungsi update profil";
    }
}