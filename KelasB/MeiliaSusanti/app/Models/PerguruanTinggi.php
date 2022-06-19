<?php
//Agregasi class dosen
namespace App\Models;

class PerguruanTinggi{
    public $id;
    public $nama_pt;
    public $akreditasi;

    public function registerMaba(){
        //
    }
//komposisi dengan mahasiswa
    public function __construct($id, $nama_pt, $akreditasi){
        $this->id = $id;
        $this->namaPT = $nama_pt;
        $this->akreditasi = $akreditasi;
    }
}