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

    <title>Harga Laundry</title>
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
    <!-- Ini Akhir Navbar Bosq-->



<!--ini awal content-->

<div class="container mt-5">


<div class="card shadow mb-4">
  <!-- Card Header - Dropdown -->
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
<h6 class="m-0 font-weight-bold text-primary">Data Masuk Minggu Ini:</h6>
  </div>

  <div class="row mt-5">

  <div class="col-xl-12 col-lg-12">
  <!-- Card Body -->
  <div class="card-body">
    <?php


    $jumlah_cos=mysqli_query($conn,"SELECT COUNT(*) as id from data_minggu");
    $row = mysqli_fetch_array($jumlah_cos);
    $jum = $row['id'];

    $hmm= $jum;
    $hal= 5;
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
    $start = ($page - 1) * $hal;
    $kap = $hal * $hal;

    $Jumlah_y=mysqli_query($conn, "select sum(jumlah) as tos from data_minggu");
    $jumlahd=mysqli_fetch_array($Jumlah_y);
     ?>

     <b>Kapasitas Costumer: <?php echo $kap ; ?></b><br>
     <b>Laporan Keuangan: <?php echo " Rp.". number_format($jumlahd['tos']).",00"; ?></b>
    <div class="table-responsive service">
    <table class="table table-bordered table-hover  mt-3 text-nowrap css-serial">
          <tr>
         <td><center>No</td>
     		 <td><center>Nama</td>
     		 <td><center>Alamat</td>
     		 <td><center>Nomor Hp</td>
     		 <td><center>Berat</td>
     		 <td><center>Jenis Barang</td>
         <td><center>Tanggal</td>
         <td><center>Total </td>
         <td><center>Hubungi</td>
         <td><center>Hapus</td>
         <td><center>Detail</td>
           </tr>

           <?php
      $query = mysqli_query($conn, "SELECT * FROM data_minggu  limit $start, $hal");

           if(mysqli_num_rows($query) <= 0){

             echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
             echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
             echo "<p><center>Data Anda Masih Kosong</center></p>";
             echo "</div>";
             echo "</div>";


           }else{


          	  while($row = mysqli_fetch_array($query)){

          	  ?>
              <tr>
              <td><center><?php echo $row['id'] ?></td>
              <td><center><?php echo $row['nama'] ?></td>
              <td><center><?php echo $row['alamat'] ?></td>
              <td><center><?php echo $row['nomor'] ?></td>
              <td><center><?php echo $row['berat']." Kg" ?></td>
              <td><center><?php echo $row['jenis'] ?></td>
              <td><center><?php echo $row['tanggal'] ?></td>
              <td><center>Rp.<?php echo $row['jumlah'] ?></td>
              <td><center><a href="https://api.whatsapp.com/send?phone=<?php echo $row['nomor'];?>&text=Assalamualaikum%20<?php echo $row['nama'] ?>%20Barang%20Anda%20Selesai%20DiLaundry "><button type="button" class="btn btn-success mt-2 mb-2">Hubungi</button></a></td>
              <td><center><a href="delete.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-warning mt-2 mb-2">  Hapus</button></a></td>
              <td><center><a href="detail.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-primary mt-2 mb-2">Detail</button></a>
               </tr>
    <?php
  }}
      ?>

    </table>

    <nav aria-label="Page navigation example">
    <ul class="pagination">
      <?php
      for($x=1;$x<=$hal ;$x++){
        ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
        <?php
      }

      ?>



    </ul>
    </nav>
  </div>




  </div>
  </div>
  </div>
  <div class="row mb-4 ml-5">

  <div class="col-sm-6">


  </div>


  <div class="col-sm-2">

  </div>


  <div class="col-sm-4">

  <a href="simpan.php"><button type="button" class="btn btn-danger mt-4 ml-5">Simpan</button></a>
  <a href="export.php"><button type="button" class="btn btn-info mt-4">Export Excel</button></a>
  </div>

  </div>





  </div>
  </div>






<!--ini akhir content bosq-->

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>
