<?php
    include '../../db_connection.php';
    $dt_hasil = new dataUji($conn);

    class dataUji {
        public function __construct($conn){
            $this->conn = $conn;
        }

        public function create($arr){
            $nama = $arr['nama'];
            $umur = $arr['umur'];
            $pekerjaan = $arr['pekerjaan'];
            $penghasilan = $arr['penghasilan'];
            $tanggungan = $arr['tanggungan'];
            $kredit = $arr['kredit'];
            $waktu = $arr['waktu'];
            $jaminan = $arr['jaminan'];
            $kelas = $arr['kelas'];

            if ($penghasilan == '3-5 juta') {
                $kelas = "Macet";
            }if ($penghasilan == '5-7 juta' || $penghasilan == '>7 juta') {
                if ($kredit == '50-100 juta') {
                    $kelas = "Lancar";
                } if ($kredit == '101-150 juta' || $kredit == '151-200 juta'|| $kredit == '201-250 juta'  || $kredit == '251-300 juta' || $kredit == '>300 juta') {
                    if ($kredit == '>300 juta') {
                        $kelas = "Lancar";
                    }if ($kredit == '101-150 juta' || $kredit == '151-200 juta'|| $kredit == '201-250 juta' || $kredit == '251-300 juta') {
                        if ($kredit == '251-300 juta') {
                            $kelas = "Lancar";
                        }if ($kredit == '101-150 juta' || $kredit == '151-200 juta' || $kredit == '201-250 juta') {
                            if ($jaminan == '151-176 %') {
                                $kelas = "Lancar";
                            }if ($jaminan == '176-200 %') {
                                if ($waktu == "9-10 tahun") {
                                    $kelas = "Lancar";
                                }if ($waktu == "3-5 tahun" || $waktu == "6-8 tahun") {
                                    if ($penghasilan == "4-6 juta") {
                                        $kelas = "Macet";
                                    }if ($penghasilan == ">7 juta") {
                                        $kelas = "Lancar"  ; 
                                    }
                                }
                            }
                        }
                    }
                }
            }
            

            
            $sql = "INSERT INTO dt_hasil (nama, umur, pekerjaan, penghasilan, tanggungan, kredit, waktu, jaminan, kelas) VALUES ('$nama', '$umur', '$pekerjaan', '$penghasilan', '$tanggungan', '$kredit', '$waktu', '$jaminan', '$kelas')";
            echo $sql;
            return mysqli_query($this->conn, $sql);
        }

        // public function update($arr){
        //     $id = $arr['id'];
        //     $deskripsi = $arr['deskripsi'];
        //     $title = $arr['title'];
        //     $sql = "UPDATE artikel SET title = '$title', deskripsi = '$deskripsi' WHERE id = '$id'";
        //     return mysqli_query($this->conn, $sql);
        // }

        public function read(){
            $sql = "SELECT * FROM dt_hasil";
            $dt_hasil = $this->conn->query($sql);
            return $dt_hasil;
        }

        // public function edit($id){
        //     $sql = "SELECT * FROM artikel WHERE id = '$id'";
        //     $artikel = $this->conn->query($sql);
        //     return $artikel;
        // }

        // public function delete($id){
        //     $sql = "DELETE FROM artikel WHERE id = '$id'";
        //     return mysqli_query($this->conn, $sql);
        // }
    }
?>
