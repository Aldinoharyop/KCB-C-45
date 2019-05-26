<?php
    include '../../Models/Artikel.php';
    $id = $_GET['id'];
    $artikel = $artikel->edit($id);
?>
