<?php
    include '../Models/dataLatih.php';

    $id = $_POST["id"];
    $title = $_POST["title"];
    $deskripsi = $_POST["deskripsi"];

    $arr = ['id' => $id, 'title' => $title, 'deskripsi' => $deskripsi];
    if ($artikel->update($arr)){
        header("Location:../views/index.php");
    }

    echo 'gagal update';
?>
