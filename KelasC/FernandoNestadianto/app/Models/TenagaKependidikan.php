<?php
namespace App\Models;
class TenagaKependidikan {
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja()
    {
        $tenaga_kependidikan = date ("i") $this->nama;
        return $tenaga_kependidikan;
    }
        
    }
}