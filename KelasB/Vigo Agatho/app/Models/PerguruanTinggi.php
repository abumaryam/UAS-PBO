<?php

namespace App\Models;

class PerguruanTinggi
{
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function registerMaba()
    {

    }

    // constructor
    public function __construct($id, $namaPT, $akreditasi)
    {
        $this->id = $id;
        $this->namaPT = $namaPT;
        $this->akreditasi = $akreditasi;
    }
}