<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AITC Backend | DATA UJI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

            <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/registrasi.css" rel="stylesheet">
</head>
<body>
    <div class="row bg-dark text-white">
      <div class="container col-md-6 col-sm-12 cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
          <div class="inner">
            <a href="../index.php">
              <h3 class="masthead-brand">KCB C-45</h3>
            </a>
            <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="../../index.php">Home</a>
            <a class="nav-link" href="../dataLatih/index.php">Data Latih</a>
            <a class="nav-link active" href="../dataUji/index.php">Data Uji</a>
            </nav>
          </div>
        </header>
      </div>
    </div>

    <br>
    <br>
    <div class="container">
        <center><h3 class="masthead-brand">Data Uji</h3></center><br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Pekerjaan</th> 
                    <th>Penghasilan</th>
                    <th>Tanggungan</th> 
                    <th>Kredit</th>
                    <th>Waktu</th>
                    <th>Jaminan</th>
                    <th>Kelas</th>
                    
                    <!-- <th colspan="2">Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../../Controllers/dataUji/ReadController.php';
                    if ($dt_hasil->num_rows > 0) {
                        while ($post = $dt_hasil->fetch_assoc()) {
                            echo '
                            <tr>
                                <td>'.$post["id"].'</td>
                                <td>'.$post["nama"].'</td>
                                <td>'.$post["umur"].'</td>
                                <td>'.$post["pekerjaan"].'</td>
                                <td>'.$post["penghasilan"].'</td>
                                <td>'.$post["tanggungan"].'</td>
                                <td>'.$post["kredit"].'</td>
                                <td>'.$post["waktu"].'</td>
                                <td>'.$post["jaminan"].'</td>
                                <td>'.$post["kelas"].'</td>
                                
                            </tr>

                        ';
                        }
                    }
                ?>
            </tbody>
        </table>
        <a href="create.php"><button class="btn btn-primary" type="submit">Create</button></a>
    </div>

    <footer class="mastfoot mt-3">
      <div class="container">
        <div class="inner">
          <p>&copy; 2018 <a href="http://si.fst.unair.ac.id">S1 Sistem Informasi Universitas Airlangga</a> </p>
        </div>
      </div>
    </footer>

    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

</body>
</html>
