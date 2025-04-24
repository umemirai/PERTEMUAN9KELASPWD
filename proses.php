<?php

    require_once('Biodata.php');

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $email = $_POST['email'];

    $biodata = new Biodata($nama, $umur, $email);
    $biodata->infoBiodata();
