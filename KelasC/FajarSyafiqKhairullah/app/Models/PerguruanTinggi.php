<?php
namespace App\Models;

class PerguruanTinggi extends Model{
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function registrasiMaba(){

    }

    public function _construct($id, $namaPT, $akreditasi){
        $this->id=$id;
        $this->namaPT=$namaPT;
        $this->akreditasi=$akreditasi;
    }
}