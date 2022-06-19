<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerguruanTinggi extends Model
{
    use HasFactory;
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function registerMaba()
    {

    }

}
