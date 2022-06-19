<?php

namespace App\Models;

class PerguruanTinggi{
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function registerMaba(){

    }
    public function __constuct($id, $namaPT, $akreditasi){
        $this->id=$id;
        $this->namaPT=$namaPT;
        $this->akreditasi=$akreditasi;
    }
}