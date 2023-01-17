<?php

$nis = $_GET['nis'];
$db = new PDO("mysql:host=localhost;dbname=tbdatasiswa",'root','');
$query = $db->query("SELECT * FROM `isidata` WHERE  `nis`='$nis'");

$data = $query->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>UPDATE</title>
<table border="2" align="center" width="97%" height="40%">
    <td>
    <form action="proses_update.php?nis=<?= $data['nis'] ?>" method="POST">
    <table align="center">
    <tr>
    <h3 align="center">UPDATE</h3>
    <input type="hidden" value="<?=$nis?>">
        <tr>
            <td>Nis</td>
            <td><input type="text" value="<?= $data['nis'];?>" name="nis"required></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" value="<?= $data['name'];?>" name="name"required></td>
        </tr>
        <tr>
        <td>Class</td>
            <td><input type="text" value="<?= $data['class'];?>" name="class"required></td>
        </tr>
        <tr>
            
        <tr>
            <td colspan="2" align="center"><button type="submit" value="simpan">UPDATE</button>
        <button><a href="isidata.php">KEMBALI</button></a></td>
    </tr>
    </table>
</form>
</td>
</table>
</body>
</html>
             
                </div>
            </form>
        </div>
</body>
</html>

