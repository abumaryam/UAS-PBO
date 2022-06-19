<?php

namespace App\Models;

require_once('User.php');

use App\Pegawai;

class Dosen extends pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $no_tlp;
    public $tugasAkhir = [];

    public function validasiMahasiswa()

    {
        
        public function setNip($nip)
        {
            $this->nip = $nip;
        }
        public function presensiMasuk()
        {

        }
        public function getNip()
        {
            return $this->nip;
        }
        public function setNama($nama)
        {
            $this->nama = $nama;
        }
        public function getNama()
        {
            return $this->nama;
        }
        public function setTugasAkhir(TugasAkhir $tgsAkhir)
        {
            $this->tugasAkhir = $tgsAkhir;
        }
        public function getTugasAkhir(TugasAkhir $tgsAkhir)
        {
            return $this->tugasAkhir;
        }
        
    }

}