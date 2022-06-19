<?php
namespace App\Models;
use App\Models\TenagaKependidikan;

interface Pegawai extends TenagaKependidikan{
 public function setNip(){
 }
 public function presensiMasuk(){

 }
 public function getNip(){
  return $this->nip;
 }
 public function setNama($nama){
  $this->nama = $nama;
 }
 public function getNama(){
  return $this->$nama;
 }
}