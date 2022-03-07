<?php 
    include("koneksi.php");

    $ulasan = $_POST["ulasan"];

    $insert = mysqli_query($koneksi,"INSERT INTO `ulasan` (`id`, `ulasan`) VALUES (NULL, '$ulasan'); ");

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