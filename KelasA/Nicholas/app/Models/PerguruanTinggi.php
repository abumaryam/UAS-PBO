<?php

// Menggunakan relasi Agregasi pada class Dosen

namespace App\Models;

class PerguruanTinggi{
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function registerMaba(){

    }

    // Menggunakan construct karena relasi komposisi dengan class Mahasiswa
    public function __construct($id, $namaPT, $akreditasi){
        $this->id = $id;
        $this->namaPT = $namaPT;
        $this->akreditasi = $akreditasi;
    }
}