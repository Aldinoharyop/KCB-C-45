<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="gambar/icon.png">

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/registrasi.css" rel="stylesheet">
    <title>SPK Kelayakan Pemberian Kredit</title>
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
            <a class="nav-link active" href="../index.php">Home</a>
            <a class="nav-link" href="../dataLatih/index.php">Data Latih</a>
            <a class="nav-link" href="../dataUji/index.php">Data Uji</a>
            </nav>
          </div>
        </header>
      </div>
    </div>

    <div class="container col-md-6 col-sm-12">
      <form class="" action="../../Controllers/dataUji/StoreController.php" method="post">

        <div class="my-3 p-3 bg-white rounded box-shadow" style="border-top:10px solid #343a40">
          <h6 class="border-bottom border-gray pb-2 mb-3">Data Diri</h6>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_nama">Nama</label>
            </div>
            <div class="col-md-7">
              <input id="form_nama" type="text" class="form-control form-control-sm" placeholder="Nama" name="nama" value="" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_umur">Umur</label>
            </div>
            <div class="col-md-7">
              <select class="custom-select form-control-sm" name="umur">
                <option selected>Pilih</option>
                <option value="21-30 th">21 - 30 th</option>
                <option value="31-40 th">31 - 40 th</option>
                <option value="41-50 th">41 - 50 th</option>
                <option value="51-60 th">51 - 60 th</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_pekerjaan">Pekerjaan</label>
            </div>
            <div class="col-md-7">
              <select class="custom-select form-control-sm" name="pekerjaan">
                <option selected>Pilih</option>
                <option value="TNI/POLRI">TNI / POLRI</option>
                <option value="PNS/BUMN">PNS / BUMN</option>
                <option value="Petani/Peternak">Petani / Peternak</option>
                <option value="Karyawan Swasta">Karyawan Swasta</option>
                <option value="Pengusaha/Wiraswasta">Pengusaha / Wiraswasta</option>
                <option value="Pensiunan">Pensiunan</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_penghasilan">Penghasilan</label>
            </div>
            <div class="col-md-7">
              <select class="custom-select form-control-sm" name="penghasilan">
                <option selected>Pilih</option>
                <option value="3-5 juta">3 - 5 juta</option>
                <option value="5-7 juta">5 - 7 juta</option>
                <option value=">7 juta"> > 7 juta</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_tanggungan">Tanggungan</label>
            </div>
            <div class="col-md-7">
              <select class="custom-select form-control-sm" name="tanggungan">
                <option selected>Pilih</option>
                <option value="<= 3 orang"><= 3 orang</option>
                <option value="> 3 orang">> 3 orang</option>
                <option value="tidak ada"> tidak ada</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_jumlahKredit">Jumlah Kredit</label>
            </div>
            <div class="col-md-7">
              <select class="custom-select form-control-sm" name="jumlahKredit">
                <option selected>Pilih</option>
                <option value="< 50 juta">< 50 juta</option>
                <option value="50-100 juta">50 - 100 juta</option>
                <option value="101-150 juta">101 - 150 juta</option>
                <option value="151-200 juta">151 - 200 juta</option>
                <option value="201-250 juta">201 - 250 juta</option>
                <option value="251-300 juta">251 - 300 juta</option>
                <option value=">300 juta"> > 300 juta</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_jangkaWaktu">Jangka Waktu</label>
            </div>
            <div class="col-md-7">
              <select class="custom-select form-control-sm" name="jangkaWaktu">
                <option selected>Pilih</option>
                <option value="<3 tahun"> < 3 tahun</option>
                <option value="3-5 tahun">3 - 5 tahun</option>
                <option value="6-8 tahun">6 - 8 tahun</option>
                <option value="9-10 tahun">9 - 10 tahun</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_nilaiJaminan">Nilai Jaminan</label>
            </div>
            <div class="col-md-7">
              <select class="custom-select form-control-sm" name="nilaiJaminan">
                <option selected>Pilih</option>
                <option value="125-150 %">125 - 150 %</option>
                <option value="151-176 %">151 - 176 %</option>
                <option value="176-200 %">176 - 200 %</option>
                <option value=">200 %"> > 200 %</option>
              </select>
            </div>
          </div>

          <button type="submit" class="btn btn-primary mb-2">Submit</button>

        </div>
      </form>
    </div>

    <footer class="mastfoot mt-auto">
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
