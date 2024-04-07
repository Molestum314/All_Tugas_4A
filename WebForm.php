<!DOCTYPE html>
<html>
<head>
    <title>Belajar Fungsi If Total Nilai</title>
</head>
<body>
<h3>Isikan Form berikut ini</h3>
<form action="" method="post">
    <table border="0">
        <tr><td>Nama</td> <td>: <input type="text" name="nama" placeholder="isikan nama" style="width: 200px;" required></td></tr>
        <tr><td>Nilai Tugas</td> <td>: <input type="number" name="tugas" placeholder="isikan nilai TUGAS" style="width: 200px;" min="0" max="100" required></td></tr>
        <tr><td>Nilai UTS</td> <td>: <input type="number" name="uts" placeholder="isikan nilai UTS" style="width: 200px;" min="0" max="100" required></td></tr>
        <tr><td>Nilai UAS</td> <td>: <input type="number" name="uas" placeholder="isikan nilai UAS" style="width: 200px;" min="0" max="100" required></td></tr>
        <tr><td></td> <td><input type="submit" name="submit" value="kirim"></td></tr>
    </table>
</form>

<?php
if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tugas = $_POST['tugas'] * (30 / 100); // Bobot nilai tugas adalah 30
    $uts = $_POST['uts'] * (30 / 100); // Bobot nilai UTS adalah 30
    $uas = $_POST['uas'] * (40 / 100); // Bobot nilai UAS adalah 40

    // Menghitung total nilai
    $total = $tugas + $uts + $uas;

    // Output yang akan ditampilkan jika total nilai valid
    echo "<hr>";
    echo "Hai <b>$nama..!!</b><br>";
    echo "Nilai Tugas: $tugas<br>";
    echo "Nilai UTS: $uts<br>";
    echo "Nilai UAS: $uas<br>";
    echo "Total Nilai: $total<br>";

    // Menghitung indeks huruf
    if ($total >= 90) {
        $indeksHuruf = "A+";
    } elseif ($total >= 85) {
        $indeksHuruf = "A";
    } elseif ($total >= 80) {
        $indeksHuruf = "A-";
    } elseif ($total >= 75) {
        $indeksHuruf = "B+";
    } elseif ($total >= 70) {
        $indeksHuruf = "B";
    } elseif ($total >= 65) {
        $indeksHuruf = "B-";
    } elseif ($total >= 60) {
        $indeksHuruf = "C+";
    } elseif ($total >= 55) {
        $indeksHuruf = "C";
    } elseif ($total >= 50) {
        $indeksHuruf = "C-";
    } elseif ($total >= 40) {
        $indeksHuruf = "D";
    } else {
        $indeksHuruf = "E"; // Jika total nilai kurang dari 40, maka indeks huruf adalah "E"
    }

    echo "Nilai Huruf: $indeksHuruf<br>";
}
?>
</body>
</html>
