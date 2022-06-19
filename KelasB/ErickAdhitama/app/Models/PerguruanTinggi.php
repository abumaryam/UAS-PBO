<?php

namespace App\Models;

use App\Models\Dosen;

class PerguruanTinggi{
    public $id; /*Int*/
    public $namaPT; /*String*/
    protected $akreditasi; /*String*/

    public function __construct($id, $namaPT, $akreditasi)
    {
        $this->id =$id;
        $this->namaPT = $namaPT;
        $this->akreditasi = $akreditasi;
    }

    public function registerMaba()
    {

    }
}