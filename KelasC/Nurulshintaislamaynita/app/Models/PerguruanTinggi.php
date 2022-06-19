<?php

namespace App\Models;
use Illuminate\Eloquent\Model;

class PerguruanTinggi extends Model{
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function __contruct($id, $namaPT, $akreditasi){
        $this->id = $id;
        $this->namaPT = $namaPT;
        $this->akreditasi = $akreditasi;
    }
    public function registerMaba(){

    }
}