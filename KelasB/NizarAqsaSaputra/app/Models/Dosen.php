<?php

namespace App\Models;

require_once('User.php');

use App\Pegawai;

class Dosen extends Pengguna implements Pegawai{

    private $nip;
    private $nama;
    private $no_telp;
    public $tugasakhir = [];

    public function ValidasiMahasiswa()
    {

    }
        public function setNip($nip)
        {
            $this->nip = $nip;
        }
        public function PresensiMasuk()
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
        public function setTugasAkhir(TugasAkhir $tugasAkhir)
        {
            $this->tugasakhir = $tugasAkhir;
        }
        public function getTugasAkhir(TugasAkhir $tugasAkhir)
        {
            return $this->tugasakhir;
        }
    }