<?php
namespace App\Models;
require_once('User.php');
use App\Models\User;

class Mahasiswa extends User
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    public function inputMatkul()
    {
    }
    public function updateProfil()
    {
    }
    function __construct($nim, $nama, $IPK, $alamat)
    {
        
    }

}