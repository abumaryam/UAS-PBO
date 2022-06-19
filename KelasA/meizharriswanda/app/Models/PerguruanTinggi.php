<?php

namespace App\Models;

use Illuminate\Foundation\Auth\PerguruanTinggi;

class PerguruanTinggi {
    public $id;
    public $namaPT;
    protected $akreditasi;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function __construct($namaPT)
    {
        $this->namaPT = $namaPT;
    }

} 