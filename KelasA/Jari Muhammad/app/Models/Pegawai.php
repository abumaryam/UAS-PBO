<?php

namespace App\Models;
use App\Models\TenagaKependidikan;

interface Pegawai extends TenagaKependidikan{
    public function presensi();
    public function setNIP($nip);
    public function getNIP();
    public function SetNama($nama);
    public function getNama();
}