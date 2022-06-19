<?php

namespace App\Models;
require_once ('Mahasiswa.php');


class PerguruanTinggi extends Mahasiswa{
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function registerMaba(){
    
    }

    function __construct($id, $namaPT, $akreditasi){
        $this->id = $id;
        $this->namaPT = $namaPT;
        $this->akreditasi = $akreditasi;
    
    }
}
?>