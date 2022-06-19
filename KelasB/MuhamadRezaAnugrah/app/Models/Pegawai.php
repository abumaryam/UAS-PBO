<?php
namespace App\Models;

interface Pegawai{
    public function setNip($nip);
    public function presensiMasuk();
    public function getNip();
    public function setNama($nama);
    public function getNama();
    public function setAlamat($alamat);
    public function getAlamat();
    public function setNoTelp($no_telp);
    public function getNoTelp();

}