<?php

    include ("koneksi.php");

?>

<!doctype html>
<html lang="en">
<head>
	<title>ADMIN ALDEFA HIJAB</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css.css">
</head>
<body>

	<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top" style="background-color: rgb(196, 88, 80) !important; padding-left: 100px; padding-right: 100px">
		<a class="navbar-brand text-light font-weight-bold" href="index.html" style="font-family: Bradley Hand ITC;">
			<img src="jilbab.png" width="30" height="30" class="d-inline-block align-top" alt="">
			Data Pelanggan
		</a>
	</nav>

	<div class="col text-center" style="padding-top:80px; padding-bottom: 80px; background-color: rgb(219, 98, 98);">
		<h1 class="text-center text-light" style="font-family: Bradley Hand ITC;"><b>Aldefa Hijab</b></h1>
		<h5 class="text-center text-light">Tampil perfect setiap saat dengan <b>ALDEFA HIJAB</b></h5>
	</div>

	<div style="padding-top:50px; padding-bottom:50px;">
		<h2 class="text-center">Data Pelanggan ALDEFA HIJAB</h2>
	</div>

    <table class="table text-center w-75">
        <thead>
            <tr>
                <th>idPelanggan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telephone</th>
                <th>Pesanan</th>
                <th>Jumlah Pesanan</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            
                $select = mysqli_query($koneksi, "select*from pesanan");
                while($data=mysqli_fetch_array($select)){
                    ?>
                    
                    <tr>
                        <td><?php  echo $data["idPesanan"] ?></td>
                        <td><?php  echo $data["nama"] ?></td>
                        <td><?php  echo $data["alamat"] ?></td>
                        <td><?php  echo $data["noHp"] ?></td>
                        <td><?php  echo $data["pesan"] ?></td>
                        <td><?php  echo $data["jumlah"] ?></td>
                        <td><?php  echo $data["jumlah"] ?></td>
                        
                    </tr>
    
                    <?php
                }
            
            ?>
    
        </tbody>
    </table>