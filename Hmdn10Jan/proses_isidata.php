<?php 
    session_start();

    $nis = $_POST['nis'];
    $name = $_POST['name'];
    $class = $_POST['class'];

    $database = new PDO("mysql:host=localhost;dbname=tbdatasiswa", 'root', '');
    $query = $database->query("INSERT INTO isidata values ('$nis','$name','$class')");

    if($query){
        header("Location:isidata.php");
     }