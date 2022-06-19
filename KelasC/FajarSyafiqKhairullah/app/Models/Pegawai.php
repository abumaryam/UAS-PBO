<?php

namespace App\Models;
use App\Models\TenagaKependidikan;

interface Pegawai extends TenagaKependidikan{
    public function setNip($nip);
    public function getNip();
    public function setNama($nama);
    public function getNama();
    public function presensiMasuk();

    
}