<?php

namespace App\Models;

interface Pegawai{
    private function setNip($nip_baru)
    {
        $this->nip=$nip_baru;
    }

    public function presensiMasuk()
    {
        
    }

    private function getNip()
    {
        return $this->nip;
    }

    private function setNama($nama_baru)
    {
        $this->nama=$nama_baru;
    }

    private function getNama()
    {
        return $this->nama;
    }
}