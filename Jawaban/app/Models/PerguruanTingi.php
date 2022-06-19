<?php
namespace App\Models;

use App\Models\Dosen;
use App\Models\Mahasiswa;

class PerguruanTinggi {
    public $id;
    public $namaPT;
    protected $akreditasi;
    
    public function registerMaba() {
        echo "Registrasi Mahasiswa Baru......";
    }
}