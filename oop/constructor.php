<?php

# membuat class Person
class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    function __construct($nama, $alamat, $jurusan) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    # membuat method
    function setNama($data) {
        $this->nama = $data;
    }
    function getNama() {
        return $this->nama;
    }

    # buet setter dan getter untuk alamat dan jurusan
    function setAlamat($data) {
        $this->alamat = $data;
    }
    function getAlamat() {
        return $this->alamat;
    }

    function setJurusan($data) {
        $this->jurusan = $data;
    }
    function getJurusan() {
        return $this->jurusan;
    }
}

# membuat object
$maya = new Person('Maya', 'Bekasi', 'Teknik Informatika');
$kino = new Person('Kino', 'Seongnam', 'Sistem Informasi');

echo $maya->getNama();