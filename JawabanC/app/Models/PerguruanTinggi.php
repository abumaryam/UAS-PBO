<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerguruanTinggi extends Model{
    public $id;
    public $namaPT;
    protected $akreditasi;
    
    public function registerMaba() {
        echo "Mendaftarkan mahasiswa baru";
    }
}