<?php
include "koneksi.php";

$nis = $_GET['nis'];

$koneksi = new PDO("mysql:host=localhost;dbname=tbdatasiswa", 'root','');
$query = $koneksi->query("DELETE FROM isidata WHERE nis='$nis'");

if($query){
    header("location:isidata.php");
}
?>