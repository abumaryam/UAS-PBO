<?php
//diimplementasikan pada class Dosen & Tenaga Kependidikan 
namespace App\Models;
use App\Models\TenagaKependidikan;

interface Pegawai extends TenagaKependidikan{
    public function presensiMasuk();
    public function setNIP($nip);
    public function getNIP();
    public function setNama($nama);
    public function getNama();
}
