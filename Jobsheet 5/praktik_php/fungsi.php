<?php
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

?>