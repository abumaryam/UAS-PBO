<?php
namespace App\Models;

class PerguruanTinggi{
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function registerMaba(){

    }

    public function __construct ($id, $namaPT){
        $this->id = $id;
        $this->namaPT = $namaPT;
    }
}