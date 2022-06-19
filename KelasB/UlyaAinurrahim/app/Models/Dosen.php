<?php
namespace App\Models;

use App\Models\User;
use App\Models\PerguruanTinggi;

class Dosen extends User implements Pegawai
{
    private $nip, $nama, $no_tlp, $perguruantinggi;

    public function __construct($nip, $nama, $no_tlp)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_tlp = $no_tlp;
    }

    public function validasiMahasiswa()
    {

    }

    public function setPerguruanTinggi(PerguruanTinggi $value)
    {
        $this-> perguruantinggi = $value;
    }

    public function getPerguruanTinggi()
    {
        return $this->perguruantinggi;
    }
}