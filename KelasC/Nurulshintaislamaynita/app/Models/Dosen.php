<?php
namespace App\Models;
use Illuminate\Eloquent\Model;
use App\Models\Pegawai;

class Dosen extends Model implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;
    private $perguruanTinggi;

    public function __contruct($nip, $nama, $no_telp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;
    }
    public function setperguruanTinggi($perguruanTinggi){
        
    }
    public function validasiMahasiswa(){

    }
}