<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "nasi_gorengdb";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama    = $_POST['name'];
$telepon = $_POST['telepon'];
$catatan = $_POST['catatan'];

$sql = "INSERT INTO pesanan (nama, telepon, catatan) VALUES ('$nama', '$telepon', '$catatan')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?status=sukses");
} else {
    header("Location: index.php?status=gagal");
}

$conn->close();
?>
