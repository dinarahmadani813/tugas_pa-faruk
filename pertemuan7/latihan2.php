<?php
//cek apakah tidak ada data di $_GET
if(lisset($_GET["nama"]) ||
!lisset($_GET["nrp"]) ||
!isset($_GET["email"]) ||
!isset($_GET["jurusan"]) ||
!isset($_GET["gambar"])) {
      // redirect
      header("Location: latihan1.php") ;
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Mahasiswa</title>

</head>
<body>

<li><img src="img/<?= $_GET["gambar"]; ?>">
<li><?= $_GET["nama"] ?></li>
<li><?= $_GET["nrp"]; ?></li>
<li><?= $_GET["email"]; ?></li>
<li><?= $_GET["jurusan"]; ?></li>  
</ul>
<a href="latihan1.php">kembali ke daftar mahasiswa</a>
</body>
</html>