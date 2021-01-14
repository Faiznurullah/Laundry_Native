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

    </nav>


<div class="container mt-5">
    <div class="card shadow mt-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary">Detail:</h6>
      </div>
      <?php

      $id_brg= ($_GET['id']);
      $ggl = !$id_brg;

      if($ggl){

          echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
             echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
            echo "<p><center>Maaf Data Ini Tidak Tersedia</center></p>";
             echo   "</div>";
             echo "</div>";

      }  else{
        $det=mysqli_query($conn, "select * from data_tahun where id='$id_brg'")or die(mysql_error());
        while($d=mysqli_fetch_array($det)){
          ?>



      <div class="row mt-5">

      <div class="col-xl-5 col-lg-5">
      <!-- Card Body -->
      <div class="card-body">

          <table class="table">

            <tr>
              <td>Nama</td>
              <td><?php echo $d['nama']; ?></td>
            </tr>

            <tr>
              <td>Alamat</td>
              <td><?php echo $d['alamat']; ?></td>
            </tr>

            <tr>
              <td>Nomor</td>
              <td><?php echo $d['nomor']; ?></td>
            </tr>


            <tr>
              <td>Berat</td>
              <td><?php echo $d['berat']." Kg"; ?></td>
            </tr>

            <tr>
              <td>Jenis</td>
              <td><?php echo $d['jenis']; ?></td>
            </tr>

            <tr>
              <td>Tanggal</td>
              <td><?php echo $d['tanggal']; ?></td>
            </tr>

            <tr>
              <td>Jumlah</td>
              <td><?php echo "Rp.".number_format($d['jumlah']).",00"; ?></td>
            </tr>

</table>

<div class="row">
<div class="col-md-4">
<a href="tahun.php"><button type="button" class="btn btn-info">Kembali Lagi</button></a>
</div>
<div class="col-md-8">

</div>

</div>

  </div>
</div>
</div>
<?php }} ?>
</div>
</div>


        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
    </html>
