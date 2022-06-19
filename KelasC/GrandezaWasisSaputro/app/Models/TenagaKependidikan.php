<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use App\Models\pegawai;

class TenagaKependidikan implements pegawai
{
    use HasApiTokens, HasFactory;
    private $nip;
    private $nama;
    private $alamat;

    private function hitungTunjanganKinerja(){

    }
    private function setNip($nip){
        $this-> nip=$nip;
    }

  
    public function presensiMasuk(){
        
    }

    
    private function getNip(){
        return $this->nip;
    }

    
    private function setNama($nama){
        $this-> nama=$nama;
    }
    
    private function getNama(){
        return $this->nama;
    }
    


}