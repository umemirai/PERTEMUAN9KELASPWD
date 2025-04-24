<?php

class Mahasiswa{
    //attribute
    private $npm, $nama, $angkatan;

    //constructor
    public function __construct($npm, $nama, $angkatan){
        $this->npm = $npm;
        $this->nama = $nama;
        $this->angkatan = $angkatan;
        // echo 'Hello World';
    }
    //method
    public function infoMhs(){
        echo "NPM: {$this->npm}".PHP_EOL;
        echo "Nama: {$this->nama}".PHP_EOL;
        echo "Angkatan: {$this->angkatan}".PHP_EOL;
    }

    public function getNpm(){
        return $this->npm;
    }

    public function setNpm($npm){
        $this->npm = $npm;
    }


}

$mhs1 = new Mahasiswa(123, 'Kiki', 2023);
$mhs1->setNpm(456);
$mhs1 -> infoMhs();
// $mhs1->npm = 123;
// $mhs1->nama ='Kiki';
// $mhs1->angkatan=2023;
// $mhs2 = new Mahasiswa();
// $mhs1->infoMhs();

echo $mhs1->getNpm();


// var_dump($mhs1);
// var_dump($mhs2);