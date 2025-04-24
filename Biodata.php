<?php

class Biodata{
    private $nama, $umur, $email;

    public function __construct($nama, $umur, $email){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->email = $email;
    }

    public function infoBiodata(){
        echo "<h2>Info Biodata</h2>";
        echo "<p>Nama: {$this->nama}</p>";
        echo "<p>Umur: {$this->umur}</p>";
        echo "<p>Email: {$this->email}</p>";
    }
}