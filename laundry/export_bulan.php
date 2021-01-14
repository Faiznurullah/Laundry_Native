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


    <title>Harga Laundry</title>
  </head>


  <!--ini awal content-->
  <h3><p class="text-center mt-4">Data Masuk Minggu Ini</p></h3>

    <center><table class=" mt-4" width="1000px" border="1">
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
         </tr>

         <?php
        	  $query = mysqli_query($conn, "SELECT * FROM data_bulan");
        	  while($row = mysqli_fetch_array($query)){
        	  ?>
            <tr>
            <td><center><?php echo $row['id'] ?></td>
            <td><center><?php echo $row['nama'] ?></td>
            <td><center><?php echo $row['alamat'] ?></td>
            <td><center><?php echo $row['nomor'] ?></td>
            <td><center><?php echo $row['berat'] ?></td>
            <td><center><?php echo $row['jenis'] ?></td>
            <td><center><?php echo $row['tanggal'] ?></td>
            <td><center>Rp.<?php echo $row['jumlah'] ?></td>
            <td><center><a href=""><button type="button" class="btn btn-success">Hubungi</button></a></td>
             </tr>
  <?php
  }
    ?>




    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename= Data_costumer.xls");
    ?>




    <!--ini akhir content bosq-->

        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
    </html>
