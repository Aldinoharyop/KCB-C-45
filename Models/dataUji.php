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
            $sql = "INSERT INTO dt_hasil (nama, umur, pekerjaan, penghasilan, tanggungan, kredit, waktu, jaminan, kelas) VALUES ('$nama', '$umur', '$pekerjaan', '$penghasilan', '$tanggungan', '$kredit', '$waktu', '$jaminan', '$kelas')";
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
