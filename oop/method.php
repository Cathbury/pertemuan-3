<?php

# membuat class Person
class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

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
$maya = new Person();
$maya->setNama('Maya Catherine');
$maya->setAlamat('Bekasi');
$maya->setJurusan('Teknik Informatika');
echo $maya->getNama();
echo "<br>";
echo $maya->getAlamat();
echo "<br>";
echo $maya->getJurusan();

$kino = new Person();
echo "<br>";
$kino->setNama('Kang Kino');
$kino->setAlamat('Seongnam');
$kino->setJurusan('Sistem Informasi');
echo $kino->getNama();
echo "<br>";
echo $kino->getAlamat();
echo "<br>";
echo $kino->getJurusan();