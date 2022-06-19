<?php

namespace App\Models;

class PerguruanTinggi
{
    public $id;
    public $nama_pt;
    protected $akreditasi;

    public function __construct($id, $nama_pt, $akreditasi)
    {
        $this->id = $id;
        $this->nama_pt = $nama_pt;
        $this->akreditasi = $akreditasi;
    }

    public function registerMaba()
    {
        //
    }
}