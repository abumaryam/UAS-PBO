<?php

namespace App\Models;

interface Pegawai{
    public function setNip($nip); 
    public function presensiMasuk();
    public function getNip(); /*String*/
    public function setNama($nama); 
    public function getNama(); /*String*/
}
