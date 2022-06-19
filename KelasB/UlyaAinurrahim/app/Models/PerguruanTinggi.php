<?php
namespace App\Models;

class PerguruanTinggi {
    public $id, $namaPt;
    protected $akreditasi;

    public function __construct($id, $namaPT, $akreditasi)
    {
        $this->id = $id;
        $this->namaPT = $namaPT;
        $this->akreditasi = $akreditasi;
    }

    public function registrasiMaba()
    {

    }
}