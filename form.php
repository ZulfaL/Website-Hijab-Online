<!doctype html>
<html lang="en">
<head>
	<title>Pemesanan ALDEFA HIJAB</title>
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
			Aldefa Hijab
        </a>
        <a class="nav-link text-redup" href="about.html" id="dropdownId">
            <i class="fa fa-book" aria-hidden="true"></i>
            About us
        </a>
	</nav>

	<div class="col text-center" style="padding-top:80px; padding-bottom: 80px; background-color: rgb(219, 98, 98);">
		<h1 class="text-center text-light" style="font-family: Bradley Hand ITC;"><b>Aldefa Hijab</b></h1>
		<h5 class="text-center text-light">Tampil perfect setiap saat dengan <b>ALDEFA HIJAB</b></h5>
	</div>

	<div style="padding-top:50px; padding-bottom:50px;">
		<h2 class="text-center">Form Pemesanan ALDEFA HIJAB</h2>
	</div>
	<div class="container">
        <form name="myForm" action="prosestambah.php" method="post">
            <div class="row">
                <div class="col-sm text-right">
                    <label for="nama">Nama Lengkap</label>
                </div>
                <div class="col-sm">
                    <input id="nama" name="nama" type="text" placeholder="Nama Anda" required>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 5px;">
                <div class="col-sm text-right">
                    <label for="alamat">Alamat</label>
                </div>
                <div class="col-sm">
                    <textarea id="alamat" name="alamat" placeholder="Alamat Lengkap"required></textarea>
                </div>
            </div>
            <div class="row" style="padding-top: 5px;">
                <div class="col-sm text-right">
                    <label for="noTelp">Nomor Telepon</label>
                </div>
                <div class="col-sm">
                    <textarea id="noTelp" name="noTelp" placeholder="Nomor Telepon"></textarea>
                </div>
            </div>
            <div class="row" style="padding-top: 5px;">
                <div class="col-sm text-right">
                    <label for="pesan">Pesanan</label>
                </div>
                <div class="col-sm">
                    <input id="pesan" name="pesan" type="text" placeholder="" value="<?php echo $_GET['kerudung'] ?>" readonly> 
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 5px;">
                <div class="col-sm text-right">
                    <label for="jumlah">Jumlah</label>
                </div>
                <div class="col-sm">
                    <input id="jumlah" name="jumlah" type="number" placeholder="Jumlah Pesanan" oninput="updateTotal()"> 
                </div>
            </div>
            <div class="row" style="padding-top: 5px;">
                <div class="col-sm text-right">
                    <label for="harga">Harga</label>
                </div>
                <div class="col-sm">
                    <input id="harga" name="harga" type="text" placeholder="" value="<?php echo $_GET['harga'] ?>" readonly>
                </div>
            </div>
            <div class="row" style="padding-top: 5px;">
                <div class="col-sm text-right">
                    <label for="harga">Total Harga</label>
                </div>    
                <div class="col-sm">
                    <input id="totalPembelian" name="totalPembelian" type="text" placeholder="" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-sm text-center" style="padding-top: 10px;">
                    <input id="button" type="submit" name="button" value="Daftar">
                </div>
            </div>
        </form>
	</div>

    <div style="background-color: lightgray;">
        <div class="container"  style="margin-top: 3cm; padding-top: 1cm; padding-bottom: 1cm;">
            <h6 class="text-center">Hubungi kami melalui : </h6>
            <p>
                <a href="https://id-id.facebook.com/zulfa.lailatulm.1" ><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="https://twitter.com/zulfal21" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://twitter.com/telegram?lang=en" ><i class="fa fa-telegram" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/zulfa_l21/" ><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/watch?v=aCV5sFv-33k" ><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </p>
        </div>
    </div>"
    


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
        function updateTotal() {  
            $("#totalPembelian").val($("#harga").val()*$("#jumlah").val());
        }
    </script>

</body>
</html>