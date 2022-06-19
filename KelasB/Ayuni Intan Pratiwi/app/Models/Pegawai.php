<?php

namespace App\Models;

interface Pegawai
{
    public function setNip($nip);
    public function presensiMasuk();
    public function getNip();
    public function setName($nama);
    public function getNama();
}