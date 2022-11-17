<?php
    include_once("config.php");

        $nama = $_POST['nama'];
        $no = $_POST['no'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $level = $_POST['level'];
        
        $result = mysqli_query($mysqli, "INSERT INTO `admin` (`id`, `nama`, `no`, `email`, `pass`, `level`) VALUES ('null', '$nama', '$no', '$email', '$pass', '$level')");
            //Pesan Sukses dan kembali ke index
        if($result){
            echo'<script>alert("Tambah Data Admin Berhasil !!")</script>';
            echo'<Script>window.location="dataadmin.php"</script>';
        } else {
            echo'<script>alert("Tambah data admin gagal")</script>';
            echo'<Script>window.location="tambahdataadmin.html"</script>';
        }
?>