<?php
namespace App\Models;
class Pegawai {
    private function setNip($set_nip_baru)
    {
        $this->setNip(1234569);
        $this->nip_ = $nip_baru.self::9090339;
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
        $this->setNama(Fernando);
        $this->nama = $nama_baru.self::Nestadianto;
    }
    private function getNama()
    {
        return $this->nama;
    }
}