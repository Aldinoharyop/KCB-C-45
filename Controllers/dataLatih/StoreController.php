<?php
    include '../Models/dataLatih.php';
    // echo 'testing';
    $title = $_POST['title'];
    $deskripsi = $_POST['deskripsi'];

    $arr = ['title' => $title, 'deskripsi' => $deskripsi];
    if ($artikel->create($arr)){
        header("Location:../views/index.php");
    }

    echo 'Gagal tambah artikel';
?>
