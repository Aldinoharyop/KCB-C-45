<?php
    include '../../db_connection.php';
    $artikel = new Artikel($conn);

    class Artikel {
        public function __construct($conn){
            $this->conn = $conn;
        }

        // public function create($arr){
        //     $title = $arr['title'];
        //     $deskripsi = $arr['deskripsi'];
        //     $sql = "INSERT INTO artikel (title, deskripsi) VALUES ('$title', '$deskripsi')";
        //     return mysqli_query($this->conn, $sql);
        // }

        // public function update($arr){
        //     $id = $arr['id'];
        //     $deskripsi = $arr['deskripsi'];
        //     $title = $arr['title'];
        //     $sql = "UPDATE artikel SET title = '$title', deskripsi = '$deskripsi' WHERE id = '$id'";
        //     return mysqli_query($this->conn, $sql);
        // }

        public function read(){
            $sql = "SELECT * FROM dt_survey  WHERE id BETWEEN 1 AND 300";
            $dt_survey = $this->conn->query($sql);
            return $dt_survey;
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
