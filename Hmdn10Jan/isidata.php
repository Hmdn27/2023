
<title>Isi Data</title>
<html>
<body>
<div class="kotak_isi"> 
<form action="proses_isidata.php" method="POST">
    <td>
    <table align="center">
    <tr>
        <td>Nis</td>
        <td><input type="number" name="nis" required ></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><input type="text" name="name" required></td>
    </tr>
    <tr>
        <td>Class</td>
        <td><input type="text" name="class" required></td>
    </tr>
    
        <td></td>
        <td align="right"><input type="submit" name="simpan" value="simpan"></td>
    </tr>

    <?php
$koneksi = new PDO("mysql:host=localhost;dbname=tbdatasiswa",'root','');
$query = $koneksi->query("SELECT * FROM isidata");
?>
<html>
    <body>

<tr>
    <tr>
        <tr>
       
        </tr>
    </tr>
</tr>
    <?php

 
    ?>
      

        </table>
 <table border="1" align="center" width="97%" height="35%">
    
            <td>
                <table align="center" border="1" width="97%" height="20%" id="myTable">
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
                       <td><a href="delete.php?nis=<?= $data['nis'] ?>" class="btn btn-info mb-3">Delete</a> |
                       <a href="update.php?nis=<?= $data['nis'] ?>" class="btn btn-info mb-3">Update</td>
                    </tr>
                    <?php endwhile; ?>
                    <script src="main.js"></script>
                    </html>
                    </body>
    </table>
</form>
</td>
</table>
</body>
</html>

