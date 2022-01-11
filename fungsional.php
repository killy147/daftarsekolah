<?php

$conn = mysqli_connect('localhost', 'root','', 'db_daftar');

function read($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {
    global $conn;
    $Nama = htmlspecialchars($data["nama"]);
    $Ttl = htmlspecialchars($data["ttl"]);
    $Warga = htmlspecialchars($data["warga"]);
    $Alamat = htmlspecialchars($data["alamat"]);
    $Email = htmlspecialchars($data["email"]);
    $Nomer = htmlspecialchars($data["nohp"]);
    $Smp = htmlspecialchars($data["asalsmp"]);
    $Ayah = htmlspecialchars($data["ayah"]);
    $Ibu = htmlspecialchars($data["ibu"]);
    $Penghasilan = htmlspecialchars($data["penghasilan"]);

    $result = mysqli_query($conn, " SELECT nama FROM siswa WHERE nama ='$Nama'");

    if (mysqli_fetch_assoc($result)){
        echo" <script>
                alert ('kamu berhasil terdaftar !');
                document.location.href ='tampildata.php';
              </script>";

        exit;        
    }
}

function ubah($data) {
    global $conn;
    $Nama = htmlspecialchars($data["nama"]);
    $Ttl = htmlspecialchars($data["ttl"]);
    $Warga = htmlspecialchars($data["warga"]);
    $Alamat = htmlspecialchars($data["alamat"]);
    $Email = htmlspecialchars($data["email"]);
    $Nomer = htmlspecialchars($data["nohp"]);
    $Smp = htmlspecialchars($data["asalsmp"]);
    $Ayah = htmlspecialchars($data["ayah"]);
    $Ibu = htmlspecialchars($data["ibu"]);
    $Penghasilan = htmlspecialchars($data["penghasilan"]);
    $query =
    "UPDATE siswa SET
    nama = '$Nama',
    ttl = '$Ttl',
    warga = '$Warga',
    alamat = '$Alamat',
    email = '$Email',
    nohp = '$Nomer',
    asalsmp = '$Smp',
    ayah = '$Ayah',
    ibu = '$Ibu',
    penghasilan = '$Penghasilan'
    WHERE id = $ID
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($ID) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $ID");
    return mysqli_affected_rows($conn);
}

?>