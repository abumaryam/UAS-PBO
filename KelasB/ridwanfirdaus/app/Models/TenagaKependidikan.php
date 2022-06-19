<?php
namespace Models;

use App\Models\User, Pegawai;

class TenagaKependidikan extends User implements Pegawai {
    private $nip;
    private $nama;
    private $alamat;

    public function __construct($nip_baru,$nama_baru)
    {
        $this->nip = $nip_baru;
        $this->nama = $nama_baru;
    }

    public function hitungTunjanganKinera()
    {
        echo "Ini adalah fungsi hitung tunjangan kinerja";
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

}