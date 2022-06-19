<?php

namespace App\Models;

Class TenagaKependidikan extends Pengguna{
    private $nip;
    private $nama;
    private $alamat;
    
        public function __construct()
        {

        }
        public function setNip($nip_baru)
        {
            $this->nip = $nip_baru;
        }
        public function setNama($nama_dosen)
        {
            $this->nama = $nama_dosen;
        }
        public function setAlamat($alamat_dosen)
        {
            $this->alamat = $alamat_dosen;
        }
        public function getNip()
        {
            return $this->nip;
        }
        public function getNama()
        {
            return $this->nama;
        }
        public function getAlamat()
        {
            return $this->alamat;
        }
}