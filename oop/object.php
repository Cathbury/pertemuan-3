<?php

# membuat class Person
class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;
}

# membuat object
$maya = new Person();
$maya->nama = "Maya Catherine";
$maya->alamat = "Bekasi";
$maya->jurusan = "Teknik Informatika";

echo $maya->nama;

$kino = new Person();
$kino->nama = "Kang Kino";
$kino->alamat = "Seongnam";
$kino->jurusan = "Sistem Informasi";