<?php
$mahasiswa = [
    ["nim" => "2506087",
    "nama" => "Lala",
    "jurusan" => "PSTI",
    "email" => "lala@gmail.com",
    "nilai" => 85
],
    ["nim" => "2506056",
        "nama" => "Andi",
        "jurusan" => "PSTI",
        "email" => "andi@gmail.com",
        "nilai" => 73
],
["nim" => "2576567",
        "nama" => "Rahul",
        "jurusan" => "PSTI",
        "email" => "Rahul@gmail.com",
        "nilai" => 65
],
["nim" => "2590124",
        "nama" => "Rina",
        "jurusan" => "PSTI",
        "email" => "Rina@gmail.com",
        "nilai" => 55
],
["nim" => "2507652",
        "nama" => "Budi",
        "jurusan" => "PSTI",
        "email" => "Budi@gmail.com",
        "nilai" => 90
],

];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <p>Mini Website PHP Dasar</p>
    <p><a href="form_pesan.php">Isi Form Pesan</a></p>
    <?php
   echo "<table>";
echo "<tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Nilai</th>
        <th>Grade</th>
        <th>Status</th>
        <th>Detail</th>
        </tr>";
    $no = 1;
    foreach ($mahasiswa as $mhs) {
        if ($mhs["nilai"] >= 80) {
            $grade = "A";
        } elseif ($mhs["nilai"] >= 70){
            $grade = "B";
        } elseif ($mhs["nilai"] >= 60){
            $grade = "C";
        } else{
            $grade = "D";
        }
        if ($mhs["nilai"] >= 70){
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }
        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $mhs["nim"] . "</td>";
        echo "<td>" . $mhs["nama"] . "</td>";
        echo "<td>" . $mhs["jurusan"] . "</td>";
        echo "<td>" . $mhs["nilai"] . "</td>";
        echo "<td>" . $grade . "</td>";
        echo "<td>" . $status . "</td>";
        $link = "detail.php?". http_build_query([
        "nim" => $mhs["nim"],
        "nama" => $mhs["nama"],
        "jurusan" => $mhs["jurusan"],
        "email" => $mhs["email"],
        "nilai" => $mhs["nilai"],
        "grade" => $grade,
        "status" => $status
]);
        echo "<td><a href='" . $link . "'>Lihat Detail</a></td>";
        echo "</tr>";
        $no++;
    }
    echo "</table>"; 
    ?>
</body>
</html>
