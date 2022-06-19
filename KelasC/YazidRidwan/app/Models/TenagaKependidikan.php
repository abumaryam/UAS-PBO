<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class TenagaKependidikan extends Model implements Pegawai
{
    private $nip;
    private $nama;
    private $alamat;

    public function TunjanganKinerja()
    {
        # code...
    }

    // implements
    private function setNip(){
        # code...
    }
    public function presensiMasuk(){
        # code...
    }
    private function getNip(){
        # code...
    }
    private function setNama(){
        # code...
    }
    private function getNama(){
        # code...
    }
}
