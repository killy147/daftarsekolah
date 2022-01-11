<?php

require 'fungsional.php';
//koneksi
//cek apakah tombol submit sudah ditekan apa belum
 if( isset($_POST["submit"])) {
//cek apakah data berhasil ditambahkan/tidak
if( tambah($_POST) > 0) {
echo "
<script>
alert('data berhasil ditambahkan!');
document.location.href = 'tampildata.php';
</script>
";
}else{
echo "
<script>
alert('data tidak berhasil ditambahkan!');
document.location.href = 'tampildata.php';
</script>
";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>SMK Informatika PESAT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="main">
        <img src="p.png" alt="">
        <ul>
            <li><a href="tampildata.php">Admin</a></li>
            <li><a href="index.php" class="active">Beranda</a></li>
            <li><a href="propil.php">Profil Sekolah</a></li>
            <li><a href="tambah.php">PPDB</a></li>
        </ul>
    </div>
    <div class="xx">
        <h1 style="margin-left: 100px;">FORM PENDAFTARAN</h1>
    </div>
    <form action="" method = "post">
        <div class="mb-3">
          <label for="nama" class="nama">Nama</label>
          <input type="text" class="form-control" id="nama" aria-describedby="nama">
        </div>
        <div class="mb-3">
            <label for="ttl" class="ttl">Tempat Tanggal lahir</label>
            <input type="text" class="form-control" id="ttl" aria-describedby="ttl">
          </div>
          <div class="mb-3">
            <label for="warga" class="warga">Warga Negara</label>
            <input type="text" class="form-control" id="warga" aria-describedby="warga">
          </div>
          <div class="mb-3">
            <label for="email" class="email">Email</label>
            <input type="text" class="form-control" id="email" aria-describedby="email">
          </div>
          <div class="mb-3">
            <label for="nohp" class="nohp">No HP</label>
            <input type="text" class="form-control" id="nohp" aria-describedby="nohp">
          </div>
          <div class="mb-3">
            <label for="asalsmp" class="asalsmp">Asal SMP</label>
            <input type="text" class="form-control" id="asalsmp" aria-describedby="asalsmp">
          </div>
          <div class="mb-3">
            <label for="ayah" class="ayah">Nama Ayah</label>
            <input type="text" class="form-control" id="ayah" aria-describedby="ayah">
          </div>
          <div class="mb-3">
            <label for="ibu" class="ibu">Nama Ibu</label>
            <input type="text" class="form-control" id="ibu" aria-describedby="ibu">
          </div>
          <div class="mb-3">
            <label for="penghasilan" class="penghasilan">Penghasilan</label>
            <input type="text" class="form-control" id="penghasilan" aria-describedby="penghasilan">
          </div>
          <div class="mb-3">
            <label for="foto" class="foto">Foto</label>
            <input type="file" class="form-control" id="foto" aria-describedby="foto">
          </div>
        <button type="submit" class="btn btn-primary" style="margin-left: 600px;">Submit</button>
      </form>
</body>

</form>
</body>
</html>