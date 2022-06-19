<?php

namespace App\Models;

interface Pegawai
{
    public function setNip($nip);
    public function PresensiMasuk();
    public function getNip();
    public function setNama($nama);
    public function getNama();
    
}