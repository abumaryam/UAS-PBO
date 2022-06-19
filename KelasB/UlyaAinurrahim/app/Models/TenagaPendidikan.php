<?php
namespace App\Models;

use App\Models\User;

class TenagaPendidikan extends User implements Pegawai {
    private $nip, $nama, $alamat;

    public function __construct($nip, $nama, $alamat)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function hitungTunjanganKinerja()
    {


    }
}
