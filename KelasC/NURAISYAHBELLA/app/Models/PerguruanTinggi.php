<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

require_once('Mahasiswa.php');
class PerguruanTinggi extends Mahasiswa
{

    public$id;
    public$namaPT;
    protected $akreditasi;

    public function registrasiMaba()
    {

    }

    public function __construct($id, $namaPT, $akreditasi)
    {
        $this->id = $id;
        $this->namaPT = $namaPT;
        $this->akreditasu = $akreditasi;
    }
}
