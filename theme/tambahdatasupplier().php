<?php
    include_once("config.php");

        $nama = $_POST['nama'];
        $kdsupp = $_POST['kdsupp'];
        
        $result = mysqli_query($mysqli, "INSERT INTO `datasupplier` (`kdsupp`, `nama`) VALUES ('$kdsupp', '$nama')");
            //Pesan Sukses dan kembali ke index
        if($result){
            echo'<script>alert("Tambah Data Supplier Berhasil !!")</script>';
            echo'<Script>window.location="datasupplier.php"</script>';
        } else {
            echo'<script>alert("Tambah data Barang gagal")</script>';
            echo'<Script>window.location="datainventory.php"</script>';
        }
?>