<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerguruanTinggi extends Model{
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function registerMaba()
    {

    }

    public function __construct($id_baru,$namaPT_baru)
    {
        $this->id=$id_baru;
        $this->namaPT=$namaPT_baru;
    }

    public function setAkreditasi($akreditasi_baru)
    {
        $this->akreditasi=$akreditasi_baru;
    }

    public function getAkreditasi()
    {
        return $this->akreditasi;
    }
}