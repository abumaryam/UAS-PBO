<?php
//implementasi class Dosen dan TenagaKependidikan
namespace App\Models;
use App\Models\TenagaKependidikan;
use App\Models\Dosen;

interface Pegawai
{
    public function presensiMasuk();
    public function setNIP($nip);
    public function getNIP();
    public function setNama($nama);
    public function getNama();
}