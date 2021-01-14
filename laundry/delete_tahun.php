<?php
include 'db.php';

$delete = mysqli_query($conn, "DELETE FROM data_tahun WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: tahun.php');
}
else{
	echo 'Gagal upload';
}
