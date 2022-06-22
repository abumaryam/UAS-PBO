<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TugasAkhir;
use App\Models\Pegawai;
use App\Models\User;

 class Dosen extends User implements Pegawai 
 {
    use HasFactory;
    private $nip;
    private $nama;
    private $no_tlp;
    private $perguruan_tinggi;
    // DP: Kurang -- public $tugas_akhir = [];

    public function __construct($nip, $nama, $no_tlp)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_tlp = $no_tlp;
    }

    public function validasiMahasiswa()
    {

    }
    public function presensiMasuk()
    {
        
    }

 }
