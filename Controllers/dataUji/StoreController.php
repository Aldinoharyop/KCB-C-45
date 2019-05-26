<?php
    include '../../Models/dataUji.php';
    // echo 'testing';

    		$nama = (isset($_POST['nama']) ? $_POST['nama'] : '');
            $umur = (isset($_POST['umur']) ? $_POST['umur'] : '');
            $pekerjaan = (isset($_POST['pekerjaan']) ? $_POST['pekerjaan'] : '');
            $penghasilan = (isset($_POST['penghasilan']) ? $_POST['penghasilan'] : '');
            $tanggungan = (isset($_POST['tanggungan']) ? $_POST['tanggungan'] : '');
            $kredit = (isset($_POST['kredit']) ? $_POST['kredit'] : '');
            $waktu = (isset($_POST['waktu']) ? $_POST['waktu'] : '');
            $jaminan = (isset($_POST['jaminan']) ? $_POST['jaminan'] : '');
            $kelas = (isset($_POST['kelas']) ? $_POST['kelas'] : '');

            // $nama = $_POST['nama'];
            // $umur = $_POST['umur'];
            // $pekerjaan = $_POST['pekerjaan'];
            // $penghasilan = $_POST['penghasilan'];
            // $tanggungan = $_POST['tanggungan'];
            // $kredit = $_POST['kredit'];
            // $waktu = $_POST['waktu'];
            // $jaminan = $_POST['jaminan'];
            // $kelas = $_POST['kelas'];
            

            // $id = isset($_GET['id']) ? $_GET['id'] : '';
            //  $id = (isset($_POST['id']) ? $_POST['id'] : '');

    $arr = ['nama' => $nama, 'umur' => $umur, 'pekerjaan' => $pekerjaan, 'penghasilan' => $penghasilan, 'tanggungan' => $tanggungan, 'kredit' => $kredit, 'waktu' => $waktu, 'jaminan' => $jaminan, 
            'kelas' => $kelas];

    if ($dt_hasil->create($arr)){
        header("Location:../../views/dataUji/index.php");
    }else {

        echo 'Gagal tambah data Uji';
        echo ""; 
    }

    
?>
