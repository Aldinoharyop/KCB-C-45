<?php
    include '../../Models/dataUji.php';

    $id = $_POST['id'];
    if ($dt_hasil->delete($id)){
        header("Location:../../views/dataUji/index.php");
    }
    echo 'gagal menghapusnya';
?>
