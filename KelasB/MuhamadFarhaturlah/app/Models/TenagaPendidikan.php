<?php 

namespace App\Models;

require_once('User.php');
use App\Pegawai;
class TenagaKependidikan extends Pengguna implements Pegawai{
    private $nip;
    private $namma;
    private $alamat;
    public function hitungTunjanganKinerja(){

    }
}