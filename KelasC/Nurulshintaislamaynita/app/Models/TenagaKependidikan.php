<?php
namespace App\Models;
use Illuminate\Eloquent\Model;
use App\Models\Pegawai;

class TenagaKependidikan extends Model implements Pegawai{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjangan(){

    }
}
