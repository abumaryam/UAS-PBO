<?php

namespace App\Models;
Use Illuminate\Database\Eloquent\Model;

Class TenagaKependidikan extends Model implements Pegawai{
    private $nip = "11223300445566";
    private $nama = "Renny Puspita Sari, S.T., M.T.";
    private $alamat = "Jl. Tanjung Rayan 2";

    public function hitungTunjangKinerja() {

    }

    public function __construct($nip, $nama, $alamat) {
        $this->nip = "11223300445566";
        $this->nama = "Renny Puspita Sari, S.T., M.T.";
        $this->alamat = "Jl. Tanjung raya 2";
    }

    public function setPegawai ($pegawai) {
    
    }

    public function getPegawai () {
        return $nama;
    }

}