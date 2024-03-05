<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "hasilTambah: ($hasilTambah) <br>";
echo "hasilKurang: ($hasilKurang) <br>";
echo "hasilKali: ($hasilKali) <br>";
echo "hasilBagi: ($hasilBagi) <br>";
echo "sisaBagi: ($sisaBagi) <br>";
echo "pangkat: ($pangkat) <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil =$a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "hasilSama: ($hasilSama) <br>";
echo "hasilTidakSama: ($hasilTidakSama) <br>";
echo "hasilLebihKecil: ($hasilLebihKecil) <br>";
echo "hasilLebihBesar: ($hasilLebihBesar) <br>";
echo "hasilLebihKecilSama: ($hasilLebihKecilSama) <br>";
echo "hasilLebihBesarSama: ($hasilLebihBesarSama) <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "hasilAnd: ($hasilAnd) <br>";
echo "hasilOr: ($hasilOr) <br>";
echo "hasilNotA: ($hasilNotA) <br>";
echo "hasilNotB: ($hasilNotB) <br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$a += $b;
echo "a += b: {$a} <br>";
$a = 10;
$a -= $b;
echo "a -= b: {$a} <br>";
$a = 10;
$a *= $b;
echo "a *= b: {$a} <br>";
$a = 10;
$a /= $b;
echo "a /= b: {$a} <br>";
$a = 10;
$a %= $b;
echo "a %= b: {$a} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "hasilIdentik: ($hasilIdentik) <br>";
echo "hasilTidakIdentik: ($hasilTidakIdentik) <br>";

$jumlahKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $jumlahKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $jumlahKursi) * 100;
echo "Kursi yang masih kosong: " . $kursiKosong . "<br>";
echo "Persentase kursi yang masih kosong: " . $persentaseKosong . "%";

?>