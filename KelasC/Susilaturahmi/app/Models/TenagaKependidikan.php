<?php
namespace App\Models;
require_once('User.php');
use App\Pegawai;

Class TenagaKependidikan extends Pegawai
{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja()
    {
    }
}

