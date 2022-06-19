<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerguruanTinggi extends Model{
    public $id,
           $namaPT;
    protected $akreditasi;

    public function registerMaba(){

    }

    public function __construct($id_baru, $namaPT_baru, $akreditasi_baru){
        $this->id = $id_baru;
        $this->namaPT = $namaPT_baru;
        $this->akreditasi = $akreditasi_baru;
    }
}