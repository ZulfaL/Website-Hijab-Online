<?php
	$koneksi = mysqli_connect("localhost","root","","hijab");

	if(mysqli_connect_errno()){
		echo mysqli_connect_errno();
	}

?>