<?php

namespace App\Models;

interface Pegawai
{
    private function setNip($Nip);
    public function presensiMasuk();
    private function getNip(){return $this->nip;}
    private function setNama();
    private function getNama(){return $this->nama;}
}