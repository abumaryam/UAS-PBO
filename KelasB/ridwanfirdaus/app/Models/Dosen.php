<?php
namespace Models;

use App\Models\User,Pegawai;

class Dosen extends User implements Pegawai {
    private $nip;
    private $nama;
    private $no_telp;
    private $nama_PT;

    public function __construct($nip_baru,$nama_baru)
    {
        $this->nip = $nip_baru;
        $this->nama = $nama_baru;
    }

    public function validasiMahasiswa()
    {
        echo "Ini adalah fungsi validasi mahasiswa";
    }

    public function setNip()
    {
        $this->nip = $nip;
    }

    public function presensiMasuk()
    {
        echo "Ini adalah fungsi presensi masuk";
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNama()
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNamaPT(PerguruanTinggi $nama_PT)
    {
        $this->nama_PT = $nama_PT;
    }

    public function getNamaPT()
    {
        return $this->nama_PT;
    }

}