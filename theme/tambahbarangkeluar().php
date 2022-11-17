<?php    
include("config.php");    
    session_start();
    $uplink = $_SESSION['uplink'];
    $iduser = $_SESSION['id'];
    
    $jumlahkeluar = $_POST['jumlahkeluar'];
	$nama = $_POST['nama'];
    $tanggalkeluar = $_POST['tanggalkeluar'];
    //Get jumlah
    $resultcek = mysqli_query($mysqli, "SELECT * FROM databarang WHERE nama='$nama'");
    while($res = mysqli_fetch_array($resultcek)) {	
        $jumlah = $res['jumlah'];
        $kdbrg  = $res['kdbrg'];	
    }

    //Total Keluar
    $jumlahkel = $jumlah - $jumlahkeluar;

    $result = mysqli_query($mysqli, "UPDATE databarang SET jumlah = '$jumlahkel' WHERE nama = '$nama'");
    $result2 = mysqli_query($mysqli, "INSERT INTO `databarangkeluar` (`kdbrg`, `tanggalkeluar` ,`nama`, `jumlah`, `iduplink`, `uplink`) VALUES ('$kdbrg', '$tanggalkeluar', '$nama', '$jumlahkeluar', '$iduser', '$uplink')");
    if($result){
        echo $result;
        echo $result2;
        echo'<script>alert("Input Barang Keluar Berhasil !!")</script>';
        echo'<Script>window.location="databarangkeluar.php"</script>';
    } else {
        echo $result;
    }
?>