<?php

//interface

namespace App\Models;

interface Pegawai {
    public function presensiMasuk();
    public function setNip($nip);
    public function getNip();
    public function setNama($nama);
    public function getNama();
}