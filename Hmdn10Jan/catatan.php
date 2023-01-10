<?php

$koneksi = new PDO("mysql:host=localhost;dbname=tbdatasiswa",'root','');
$query = $koneksi->query("SELECT * FROM isidata");
?>
<html>
    <body>
<title>DATA TABLES</title>
<table border="1" align="center" width="97%">
    <?php

    if(isset($_GET['search'])){
        $cari = $_GET['search'];
        $query = $koneksi->query("SELECT * FROM isidata where nis LIKE '%$cari%' ");
    }
    ?>
      
      </table>
      <table border="1" align="center" width="97%" height="65%">
            <td>
                <table align="center" border="1" width="97%" height="65%" id="myTable">
                    <tr>
                    <th>Nis</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th scope="col">Aksi</th>
                    </tr>
                    <?php while($data = $query->fetch()) : ?>
                    <tr>
                        <td><?= $data['nis']?></td>
                        <td><?= $data['name']?></td>
                        <td><?= $data['class']?></td>
                       <td><a href="prosesdelete.php?nis=<?= $data['nis'] ?>" class="btn btn-info mb-3">Delete</a> |
                       <a href="edit.php?nis=<?= $data['nis'] ?>" class="btn btn-info mb-3">Edit</td>
                    </tr>
                    <?php endwhile; ?>
                    <script src="main.js"></script>
                    </html>
                    </body>