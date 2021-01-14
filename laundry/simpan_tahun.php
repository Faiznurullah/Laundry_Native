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



         <?php
        	  $query = mysqli_query($conn, "SELECT * FROM data_bulan");
        while($row = mysqli_fetch_array($query)){

  $nama = $row['nama'];
  $alamat = $row['alamat'];
  $nomor = $row['nomor'];
  $berat = $row['berat'];
  $jenis = $row['jenis'];
  $tanggal = $row['tanggal'];
  $jumlah = $row['jumlah'];

  $insert = mysqli_query($conn, "INSERT INTO data_tahun VALUES (
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
    header('Location: tahun.php');
  }else{
    echo "Gagal Simpan Data Ke Tahun";
  }

        	  ?>

<?php
}
 ?>





    <!--ini akhir content bosq-->

        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
    </html>
