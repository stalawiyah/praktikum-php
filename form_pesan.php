<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form Pesan Mahasiswa</h2>
    <form action="hasil_pesan.php" method="post">
        <p>Nama:</p>
        <input type="text" name="nama" required>
        <p>Kelas:</p>
        <input type="text" name="kelas" required>
        <p>Pesan/Kesan:</p>
        <textarea name="pesan" required></textarea>
        <br><br>
        <button type="submit">Kirim</button>
    </form>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>