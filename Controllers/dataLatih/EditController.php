<?php
    include '../Models/dataLatih.php';
    $id = $_GET['id'];
    $artikel = $artikel->edit($id);
?>
