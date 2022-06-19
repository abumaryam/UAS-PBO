<?php

namespace App\Models;
Use Illuminate\Database\Eloquent\Model;
Use App\Models\PerguruanTinggi;
Use App\Models\TugasAkhir;

Class Dosen extends Model implements Pegawai{
    private $nip = "11223300445566";
    private $nama = "Renny Puspita Sari, S.T., M.T.";
    private $no_telp = "0822-3344-1122";

    public function validasiMahasiswa() {

    }

}