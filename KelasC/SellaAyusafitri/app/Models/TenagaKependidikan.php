<?php 

namespace App\Models;

require_once('Model.php');

use App\Pegawai;

class TenagaKependidikan extends Model implements Pegawai
{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja()
    {
        
    }
}