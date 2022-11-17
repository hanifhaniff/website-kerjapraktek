<?php

$databaseHost = 'localhost';
$databaseName = 'gudangarasi';
$databaseUsername = 'root';
$databasePassword = '';

//mysql konek
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

//kondisi jika gagal.
if($mysqli->connect_error)
{
    die("Koneksi Gagal" . $mysqli->connect_error);
}   
?>