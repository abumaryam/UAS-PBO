<?php
use App\Models;

interface Pegawai {
    public function setNip();
    public function getNip();
    public function setNama();
    public function getNama();
    public function presensiMasuk();
}