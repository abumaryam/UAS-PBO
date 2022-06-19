<?php

namespace App\Models;

use Iluminate\Database\Eloquent\Model;

interface Pegawai{
    public function setNip($nip);

    public function pesensiMasuk();

    public function getNip();
    
    public function setNama($nama);

    public function getNama();
}