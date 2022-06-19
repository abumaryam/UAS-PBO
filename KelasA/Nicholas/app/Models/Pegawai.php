<?php

// class Pegawai di implementasi dengan class TenagaKependidikan dan class Dosen
namespace App\Models;

use App\Models\TenagaKependidikan;

interface Pegawai extends TenagaKependidikan{
    public function setNip();
    public function presensiMasuk();
    public function getNip();
    public function setNama();
    public function getNama();
}