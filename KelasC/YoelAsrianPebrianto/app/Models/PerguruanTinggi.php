<?php

namespace App\Models;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;

class PerguruanTinggi extends Model{
    
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function registerMaba()
    {

    }
}