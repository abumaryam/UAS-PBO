<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers;

class TugasAkhirController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $show = [
        'daftarkanTA',
        'ubahTA',
        'validasiPendaftaran',
        'inputNilaiSempro',
        'inputNilaiSemhas',
        'inputNilaiSidang',
    ];
}
