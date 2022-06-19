<?php
namespace App\Models;

require_once('User.php');

use App\Pegawai;

class TenagaKependidikan extends User implements pegawai 
{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja()
    {
        
    }
}