<?php    
include("config.php");    
    $kdbrg = $_POST['kdbrg'];
	$nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    
    $result = mysqli_query($mysqli, "UPDATE databarang SET lokasi = '$lokasi' WHERE kdbrg = '$kdbrg'");
    if($result){
        echo'<script>alert("Update Data Berhasil !!")</script>';
        echo'<Script>window.location="datainventory.php"</script>';
    } else {
        echo $result;
    }
?>