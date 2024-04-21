<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '123456'); // Isi dengan kata sandi database jika ada
define('DB1', 'prakwebdb');

// Buat koneksi
$db1 = new mysqli(HOST, USER, PASS, DB1);

?>
