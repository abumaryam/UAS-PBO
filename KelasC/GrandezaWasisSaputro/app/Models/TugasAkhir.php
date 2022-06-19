<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;


class TugasAkhir implements Eloquent
{
    use HasApiTokens, HasFactory;
    private $id;
    public $judul_ta;
    public $mahasiswa_ta;
    public $pebimbing_ta;
    public $penguji_ta;

    public function tambahTa(){
        
    }

}