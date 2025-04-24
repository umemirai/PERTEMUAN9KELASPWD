<?php

    require_once('Biodata.php');

    if($_SERVER['REQUEST_METHOD']=='post'){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $email = $_POST['email'];

    $biodata = new Biodata($nama, $umur, $email);
    $biodata->infoBiodata();
    }else{
        echo "<script>alert('Anda tidak berhak akses halaman ini')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url=form.php">
        <?php
    }
    
