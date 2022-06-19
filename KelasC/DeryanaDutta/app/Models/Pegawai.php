<?php

namespace App\Models;

interface pegawai{
    public function setNip();
    public function presensiMasuk();
    public function getNip();
    public function getNama();
}