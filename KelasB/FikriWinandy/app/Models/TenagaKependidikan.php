<?php

namespace App\Models;

require_once('pengguna.php');
use App\Pegawai;

class TenagaKependidikan extends Pengguna implements Pegawai{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja()
    {
    }
}