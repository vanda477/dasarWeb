<!-- <?php
function perkenalan($nama, $salam="Asslamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";

}
perkenalan("Hamdana","Hallo");

echo"<hr>";

$saya ="Sheva";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);

?> -->

<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo "Umur saya adalah". hitungUmur(2004, 2023) ."tahun"
?>