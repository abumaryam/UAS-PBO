<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class Dosen extends Model implements Pegawai
{
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa()
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
