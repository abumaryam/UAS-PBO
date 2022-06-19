<?php

namespace App\Models;

interface Pegawai{
    public function setNip($nip);
    public function presensiMasuk();
    public function getNip($nip);
    public function setNama($nama);
    public function getNama($nama);

}