<?php 
    include("koneksi.php");

    $nama = $_POST["nama"];
    $alamat =  $_POST["alamat"];
    $noHp =  $_POST["noTelp"];
    $pesan =  $_POST["pesan"];
    $jumlah =  $_POST["jumlah"];
    $totalPembelian = $_POST["totalPembelian"];

    $insert = mysqli_query($koneksi,"INSERT INTO `pesanan` VALUES (NULL, '$nama', '$alamat', '$noHp', '$pesan', $jumlah, $totalPembelian)");

    if($insert){
        ?>
        <script>
            alert("Berhasil");
            document.location = "index.html";
        </script>
        <?php
    } else {
        echo "error";
    }
?>