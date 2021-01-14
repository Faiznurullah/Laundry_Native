<?php
include 'db.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/laundry.png" sizes="16x16 32x32" type="image/png">


      <!--css Native Sendiri-->
    <link rel="stylesheet" href="style.css">

    <title>Laundry</title>
  </head>
  <body>

<!-- ini navbar Bosq-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="index.php">Laundry Native</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="harga.php">Harga</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
              Data Costumer
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="minggu.php">Data Minggu Ini</a></li>
                <li><a class="dropdown-item" href="bulan.php">Data Bulan Ini</a></li>
                <li><a class="dropdown-item" href="tahun.php">Data Tahun Ini</a></li>
              </ul>
            </li>
          </ul>
        </div>



      </div>
      <?php
      echo "<font class='ml-3 mr-3' color='white' size='4px'>".date('l,d-m-y ');
      echo "</font>";
       ?>
    </nav>
<!-- Ini Akhir Navbar Bosq-->



<!--ini Konten Bosq-->
<div class="container">

<div class="row mt-5">
  <div class="col-xl-1">
  </div>

<div class="col-xl-12 col-lg-8">
<div class="card shadow mb-4">
  <!-- Card Header - Dropdown -->
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
<h6 class="m-0 font-weight-bold text-primary">Tambah Costumer:</h6>
  </div>
  <!-- Card Body -->
  <div class="card-body">

    <form action='' name='kirim' method='post'>

    <div class="row">

      <div class="col-sm-4">
    <label>Nama:</label>
    <input class="form-control form-control-sm" type="text" placeholder="Nama Costumer" aria-label=".form-control-sm example" name='nama' required>
    </div>


      <div class="col-sm-4">
    <label>Alamat:</label>
    <input class="form-control form-control-sm" type="text" placeholder="Kompleks-Desa-Kec-Kab" aria-label=".form-control-sm example" name='alamat' required>
    </div>


      <div class="col-sm-4">
    <label>Nomor Handphone:</label>
    <input class="form-control form-control-sm" type="number" placeholder="Nomor Handphone" aria-label=".form-control-sm example" name='nomor' required>
    </div>

    </div>


    <div class="row">

    <div class="col-sm-4">
      <label>Berat/Kg:</label>
      <input class="form-control form-control-sm" type="number" placeholder="Berat" aria-label=".form-control-sm example" name='berat' required>
    </div>



    <div class="col-sm-4">
    <label>Jenis Barang:</label>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name='jenis' required>
      <option value="pakaian">Pakaian</option>
      <option value="Boneka">Boneka</option>
      <option value="Furniture">Furniture</option>
      <option value="Lainnya">Lainnya</option>
    </select>

    </div>

    <div class="col-sm-4">
    <label>Tanggal:</label>
      <input class="form-control form-control-sm" type="date" placeholder="Berat" aria-label=".form-control-sm example" name='tanggal' required>

    </div>

    </div>



    <button type="submit" class="btn btn-info btn-lg btn-block mt-4" name='kirim'>Kirim</button>


    <?php

     $panggil = mysqli_query($conn, "SELECT * FROM harga");
     $sip = mysqli_fetch_array($panggil);

      if(isset($_POST['kirim'])){

     $nama = $_POST['nama'];
     $alamat = $_POST['alamat'];
     $nomor = $_POST['nomor'];
     $berat = $_POST['berat'];
     $jenis = $_POST['jenis'];
     $tanggal = $_POST['tanggal'];
     $dut = $sip['harga'];
     $jumlah = $berat * $dut;


     $insert = mysqli_query($conn, "INSERT INTO data_minggu VALUES (
      NULL,
      '$nama',
      '$alamat',
      '$nomor',
      '$berat',
      '$jenis',
      '$tanggal',
      '$jumlah'
        )");

     if($insert){
       echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
       echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
       echo "<p><center>Data Sudah Masuk</center></p>";
       echo   "</div>";
       echo "</div>";
     }else{
       echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
       echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
       echo "<p><center>Data Gagal Masuk</center></p>";
       echo   "</div>";
       echo "</div>";

     }


      }


    ?>



  </div>
</div>
</div>
</div>
</div>





</form>
</div>
<!--ini Akhir konten bosq-->



    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>
