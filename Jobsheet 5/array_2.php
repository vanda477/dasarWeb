<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        }
        th, td {
        border: 1px solid #ddd;
        padding: 8px;
        }
        th {
        text-align: center;
        }
    </style>
    </head>
    <body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan',
    ];

    echo "<h2>Data Dosen</h2>";

    echo "<table>";
    echo "<tr>";
    echo "<th>Nama</th>";
    echo "<th>Domisili</th>";
    echo "<th>Jenis Kelamin</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>{$Dosen['nama']}</td>";
    echo "<td>{$Dosen['domisili']}</td>";
    echo "<td>{$Dosen['jenis_kelamin']}</td>";
    echo "</tr>";

    echo "</table>";
    ?>
    </body>
</html>
