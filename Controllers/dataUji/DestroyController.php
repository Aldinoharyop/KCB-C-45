<?php
    include '../../Models/Artikel.php';

    $id = $_POST['id'];
    if ($artikel->delete($id)){
        header("Location:../views/index.php");
    }
    echo 'gagal menghapusnya';
?>
