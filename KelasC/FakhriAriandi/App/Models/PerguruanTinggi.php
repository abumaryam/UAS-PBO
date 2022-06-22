<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PerguruanTinggi extends Model
{
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function registrasiMaba()
    {

    }
    //construct dari mahasiswa
    public function __construct($id, $namaPT, $akreditasi)
    {
        $this->id = $id;
        $this->namaPT = $namaPT;
        $this->akreditasi = $akreditasi;
    }
}