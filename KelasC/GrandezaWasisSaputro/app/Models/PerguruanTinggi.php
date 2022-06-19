<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;


class PerguruanTinggi extends Eloquent
{
    use HasApiTokens, HasFactory;

    public $id;
    public $nama_pt;
    protected $akreditasi;


    public function registerMaba(){
        
    }

}