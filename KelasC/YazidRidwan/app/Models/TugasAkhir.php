<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa as MHS;
use App\Models\Dosen as DSN;

class TugasAkhir{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA=[];
    public $pengujiTA=[];

    public function __construct(MHS $mhsTA, DSN $pbimbingTA, DSN $pngujiTA) {
        $this->mahasiswaTA = $mhsTA;
        $this->pembimbingTA= $pbimbingTA;
        $this->pengujiTa= $pngujiTA;
    }
    public function tambahTA()
    {
        # code...
    }
}
