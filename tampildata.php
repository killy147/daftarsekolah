<?php
    session_start();

    if (!isset ($_SESSION["login"])){

    header("Location: login.php");
    exit; 
}


    require 'fungsional.php';

    $user = read("SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database User</title>
</head>
<body>
    <h1>DATA USER</h1>
    <br>
    <button><a href="tambah.php">Tambah Data</a></button>
    <table border = "1" cellpadding = "10" cellspacing = "0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>TTL</th>
            <th>Warga Negara</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Asal SMP</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Penghasilan</th>
            <th>Action</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach($user as $a) :?>

        <tr>
            <td><?= $i++ ?></td>
            <td><?= $a['nama'] ?></td>
            <td><?= $a['ttl'] ?></td>
            <td><?= $a['warga'] ?></td>
            <td><?= $a['alamat'] ?></td>
            <td><?= $a['email'] ?></td>
            <td><?= $a['nohp'] ?></td>
            <td><?= $a['asalsmp'] ?></td>
            <td><?= $a['ayah'] ?></td>
            <td><?= $a['ibu'] ?></td>
            <td><?= $a['penghasilan'] ?></td>
            <td>
                <a href="ubah.php?id=<?= $a ["id"]; ?>">Ubah  | </a>
                <a href="hapus.php?id=<?= $a ["id"]; ?>" onclick = "return confirm ('yakin kah ?')";>Hapus</a>
            </td>
        </tr>
        
        <?php endforeach;?>

    </table>
    <button> <a href="logout.php">Logout</a></button>
</body>
</html>