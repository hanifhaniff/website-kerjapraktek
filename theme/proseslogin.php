<?php 
include_once("config.php");
$email = $_GET['email'];
$password = $_GET['password'];
$result = mysqli_query($mysqli, "select * from admin where email='$email' and pass='$password'");
$row = mysqli_num_rows($result);
while($res = mysqli_fetch_array($result)) {
	$id = $res['id'];
	$nama = $res['nama'];
	$level = $res['level'];
}
if($row > 0){
	session_start();
	$_SESSION['status'] = "login";
	$_SESSION['uplink'] = $nama;
	$_SESSION['id'] = $id;
	$_SESSION['level'] = $level;
    header("location:index.php");
    echo'<script>alert("Login Berhasil")</script>';
} else {
	echo'<script>alert("Username / Password Salah")</script>';
    echo'<Script>window.location="login.html"</script>';
}
?>