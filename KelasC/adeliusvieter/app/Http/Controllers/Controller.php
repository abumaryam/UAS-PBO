<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class TugasAkhirContoroller
{
    public $daftarkanTA;
    public $ubahTA;
    public $validasiPendaftaran;
    public $inputNilaiSempro;
    public $inputNilaiSemhas;
    public $inputNilaiSidang;
}