<?php
namespace App\Models;

interface Pegawai
{
    private function setNip($nip);

    public function presensiMasuk();

    private function getNip(){
        return $this->nip;
    }
    private function setNama($nama);

    private function getNama(){
        return $this->nama;
    }
}