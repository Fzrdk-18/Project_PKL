<?php 
	$koneksi = mysqli_connect('localhost','root','','db_pkl');
	if (!$koneksi) {
	 	# code...
	 	echo "koneksi error".mysqli_connect_error();
	 } 
?>