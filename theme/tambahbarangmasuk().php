<?php
    include_once("config.php");
    session_start();
    $uplink = $_SESSION['uplink'];
    $iduser = $_SESSION['id'];

        $nama = $_POST['nama'];
        $kdbrg = $_POST['kdbrg'];
        $jumlah = $_POST['jumlah'];
        $lokasi = $_POST['lokasi'];
        $tanggalmasuk = $_POST['tanggalmasuk'];
        $kdsupp = $_POST['kdsupp'];
        
        $result = mysqli_query($mysqli, "INSERT INTO `databarang` (`kdbrg`, `nama`,`kdsupp`, `lokasi` , `jumlah`) VALUES ('$kdbrg', '$nama', '$kdsupp', '$lokasi', '$jumlah')");
        $result1 = mysqli_query($mysqli, "INSERT INTO `databarangmasuk` (`kdbrg`, `tanggalmasuk`, `nama`, `kdsupp`, `jumlah`, `iduplink`, `uplink`) VALUES ('$kdbrg', '$tanggalmasuk', '$nama', '$kdsupp', '$jumlah', '$iduser', '$uplink')");
            //Pesan Sukses dan kembali ke index
        if($result){
            echo'<script>alert("Tambah Data Barang Masuk Berhasil !!")</script>';
            echo'<Script>window.location="databarangmasuk.php"</script>';
        } else {
            echo'<script>alert("Tambah data Barang gagal")</script>';
            echo'<Script>window.location="databarangmasuk.php"</script>';
        }
?>