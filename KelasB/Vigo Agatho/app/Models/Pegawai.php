<?php

namespace App\Models;

interface Pegawai
{
    public function presensiMasuk();
    public function setNIP($nip);
    public function getNIP();
    public function setNama($nama);
    public function getNama();
}