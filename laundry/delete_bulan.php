<?php
include 'db.php';

$delete = mysqli_query($conn, "DELETE FROM data_bulan WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: bulan.php');
}
else{
	echo 'Gagal upload';
}

?>
