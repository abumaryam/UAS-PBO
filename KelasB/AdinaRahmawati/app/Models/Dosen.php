<?php
namespace App\Models;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Dosen extends User implements Pegawai 
{
    private $nip;
    private $nama;
    private $no_telp;
    private $mahasiswaTA;
    private $judulTA;

    public function __construct($id, $nama_pt)
    {
        $this->id = $id;
        $this->nama_pt = $nama_pt;
    }

    public function seTugasAkhir(TugasAkhir $judulTA)
    {
        $this->judulTA = $judulTA;
    }

    public function getTugasAkhir()
    {
        return $this->judulTA;
    }

    public function setMahasiswaTA(TugasAkhir $mahasiswaTA)
    {
        $this->mahasiswaTA = $mahasiswaTA;
    }

    public function getMahasiswaTA()
    {
        return $this->mahasiswaTA;
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNotelp($no_telp)
    {
        $this->no_telp = $no_telp;
    }

    public function getNotelp()
    {
        return $this->no_telp;
    }

    public function validasiMahasiswa()
    {
        
    }

}
