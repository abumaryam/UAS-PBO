<?php

namespace App\Models;

require_once('Mahasiswa.php');
class PerguruanTinggi extends Mahasiswa
{
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function registerMaba()
    {
    }
}