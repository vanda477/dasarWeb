<?php
// $servername = "localhost";
// $username = "root";
// $password = ""; 
// $dbname = "prakwebdb";

// // Membuat koneksi ke database
// $connect = mysqli_connect($servername, $username, $password, $dbname);

// // Cek koneksi
// if (!$connect) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }

// // Query untuk membuat tabel
// $sql = "CREATE TABLE user (id, username, password)
// VALUES ('1', 'admin', '123')
// )";

// if (mysqli_query($connect, $sql)) {
//     echo "Tabel user berhasil dibuat";
// } else {
//     echo "Error creating table: " . mysqli_error($connect);
// }

// mysqli_close($connect);

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "prakwebdb";

// Membuat koneksi ke database
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk membuat tabel
$sql = "CREATE TABLE user (
    id INT(11) PRIMERY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
)";

if (mysqli_query($connect, $sql)) {
    echo "Tabel user berhasil dibuat";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}

mysqli_close($connect);

?>