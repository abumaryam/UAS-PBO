<?php
namespace App\Models;
use App\Models\Dosen;
use App\Models\TenagaKependidikan;
use App\Models\Mahasiswa;

class User extends User{
    public $username;
    public $password;
    protected $email;
    protected $hidden;
    protected $cast;

    public function login(){}

    public function register(){}

}