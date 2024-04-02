<?php
$umur;
if (isset($sumur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak di temukan.";
}

$data = array("nama" => "Jane", "usia" =>25);
if (isset($data["nama"])){
    echo "<br>Nama: " . $data["nama"];
} else {
    echo "<br>Variabel 'nama' tidak di temukan dalam array.";
}
?>