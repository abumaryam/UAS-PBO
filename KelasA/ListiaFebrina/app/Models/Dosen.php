<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;
use App\Models\TugasAkhir;
use App\models\Pegawai;
use App\Models\User;

 class Dosen extends User implements Pegawai 
 {
    use HasFactory;
    private $nip;
    private $nama;
    private $no_tlp;
    private $perguruan_tinggi;

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
