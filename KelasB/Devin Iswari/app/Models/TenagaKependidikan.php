<?php
namespace App\Model;

interface TenagaKependidikan{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja($nip);
    

}