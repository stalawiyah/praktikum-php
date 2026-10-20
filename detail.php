<?php

if (
    isset($_GET["nim"]) &&
    isset($_GET["nama"]) &&
    isset($_GET["jurusan"]) &&
    isset($_GET["email"]) &&
    isset($_GET["nilai"]) &&
    isset($_GET["grade"]) &&
    isset($_GET["status"])
) {
    $nim = $_GET["nim"];
     $nama = $_GET["nama"];
      $jurusan = $_GET["jurusan"];
       $email = $_GET["email"];
        $nilai = $_GET["nilai"];
         $grade = $_GET["grade"];
          $status = $_GET["status"];
} else {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Detail Mahasiswa</h2>
    <p>Nim: <?php echo htmlspecialchars($nim); ?></p>
    <p>Nama: <?php echo htmlspecialchars($nama); ?></p>
    <p>Jurusan: <?php echo htmlspecialchars($jurusan); ?></p>
    <p>Email: <?php echo htmlspecialchars($email); ?></p>
    <p>Nilai: <?php echo htmlspecialchars($nilai); ?></p>
    <p>Grade: <?php echo htmlspecialchars($grade); ?></p>
    <p>Status: <?php echo htmlspecialchars($status); ?></p>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>