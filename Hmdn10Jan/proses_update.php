<?php
session_start();

$nis = $_GET['nis'];

$nis = $_POST['nis'];
$name = $_POST['name'];
$class = $_POST['class'];

$db = new PDO("mysql:host=localhost;dbname=tbdatasiswa",'root','');

$query = $db->query("UPDATE `isidata` SET  `nis`='$nis',`name`='$name',`class`='$class' WHERE  `nis`='$nis'");

if($query){
    header ("location:isidata.php");
}