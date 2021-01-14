<?php
include 'db.php';

$delete = mysqli_query($conn, "DELETE FROM data_minggu WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: minggu.php');
}
else{
	echo 'Gagal upload';
}

?>
