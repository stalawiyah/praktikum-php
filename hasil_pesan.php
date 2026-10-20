<?php
if (
    isset($_POST["nama"])&&
    isset($_POST["kelas"])&&
    isset($_POST["pesan"])
){
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $pesan = $_POST["pesan"];
} else {
    header("Location: form_pesan.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Pesan berhasil dikirim!</h2>
    <p>Terima kasih, <?php echo htmlspecialchars($nama); ?>!</p>

    <p>Nama: <?php echo htmlspecialchars($nama); ?></p>
    <p>Kelas: <?php echo htmlspecialchars($kelas); ?></p>
    <p>Pesan/Kesan: <?php echo htmlspecialchars($pesan); ?></p>
    <p><a href="index.php">Kembali ke Data Mahasiswa</a></p>
</body>
</html>