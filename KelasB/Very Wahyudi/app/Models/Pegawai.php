<?php

namespace App\Models;

Interface Pegawai
{
    public function setNip($nip);

    public function presensiMasuk();
    public function getNip();

    public function setNama($nama);
    public function getNama();
}