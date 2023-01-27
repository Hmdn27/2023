<?php

require 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

$faker = Faker\Factory::create();
$dompdf = new Dompdf();

$Nama = $faker->name();
$Alamat = $faker->text();

$dompdf->loadHtml("
    <table border='1'>
        <tr>
           <td>Nama</td>
           <td>Alamat</td>
        </tr>
        <tr>
           <td>".$Nama."</td>
           <td>".$Alamat."</td>
        </tr>
    </table>");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();