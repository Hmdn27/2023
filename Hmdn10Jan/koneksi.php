<?php
session_start();
class koneksi{
        function getkoneksi(){
                return new PDO("mysql:host=localhost;dbname=tbdatasiswa",'root','');
        }
}
        