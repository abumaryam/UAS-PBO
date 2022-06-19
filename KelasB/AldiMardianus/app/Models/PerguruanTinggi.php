<?php
//diagregasikan karena komposisi dengan Mahasiswa 
namespace App\Models;

class PerguruanTinggi{
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function registerMaba()
    {

    }
    //construct karena komposisi dengan Mahasiswa
    public function __construct($id, $namaPT, $akreditasi)
    {
        $this->id= $id;
        $this->namaPT =$namaPT;
        $this->akreditasi = $akreditasi;
    }
}