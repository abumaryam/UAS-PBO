<?php
namespace App\Models;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Model;

class TenagaKependidikan extends Model implements Pegawai {
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja(){
        echo "Menghitung tunjangan kinerja";
    }
    
    public function presensiMasuk(){
        // isi fungsi presensi
    }
    public function setNip($nip){
        $this->nip = $nip;
    }

    public function getNip(){
        return $this->nip;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }

    public function getAlamat(){
        return $this->alamat;
    }
    

}
