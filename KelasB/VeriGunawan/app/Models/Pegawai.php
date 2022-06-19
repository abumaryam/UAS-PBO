<?php
namespace App\Models;
use App\Models\TenagaPendidikan;

interface Pegawai extends TenagaPendidikan{

    public function setNip($nip_baru);
    public function presensiMasuk();
    public function getNip();
    public function setNama($nama_baru);
    public function getNama();
}