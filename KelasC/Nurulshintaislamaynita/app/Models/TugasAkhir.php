<?php
namespace App\Models;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;

class TugasAkhir extends Model{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;

    public function tambahTA(){

    }

}