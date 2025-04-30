<!DOCTYPE html>
<html>
<head>
    <title>Data KRS Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th {
            background-color: #d3d3d3;
            padding: 8px;
            border: 1px solid black;
            text-align: center;
        }
        td {
            padding: 8px;
            border: 1px solid black;
            text-align: center;
        }
        .tidak-revisi {
            background-color: green;
            color: white;
        }
        .revisi {
            background-color: red;
            color: white;
        }
        .section-border td {
            border-bottom: 5px solid black;
        }
    </style>
</head>
<body>

<?php

$data = [
    [
        "nama" => "Ridho",
        "matkul" => [
            ["nama_matkul" => "Pemrograman I", "sks" => 2],
            ["nama_matkul" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_matkul" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama_matkul" => "Arsitektur Komputer", "sks" => 3],
        ]
    ],
    [
        "nama" => "Ratna",
        "matkul" => [
            ["nama_matkul" => "Basis Data I", "sks" => 2],
            ["nama_matkul" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_matkul" => "Kalkulus", "sks" => 3],
        ]
    ],
    [
        "nama" => "Tono",
        "matkul" => [
            ["nama_matkul" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_matkul" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_matkul" => "Komputasi Awan", "sks" => 3],
            ["nama_matkul" => "Kecerdasan Bisnis", "sks" => 3],
        ]
    ],
];

foreach ($data as $index => $mahasiswa) {
    $totalSks = 0;
    foreach ($mahasiswa['matkul'] as $matkul) {
        $totalSks += $matkul['sks'];
    }
    $data[$index]['total_sks'] = $totalSks;
    $data[$index]['keterangan'] = ($totalSks < 7) ? "Revisi KRS" : "Tidak Revisi";
}

echo "<table>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
      </tr>";

$no = 1;
foreach ($data as $mahasiswa) {
    $totalSks = $mahasiswa['total_sks'];
    $keterangan = $mahasiswa['keterangan'];
    $classKeterangan = ($keterangan == "Tidak Revisi") ? "tidak-revisi" : "revisi";

    foreach ($mahasiswa['matkul'] as $index => $matkul) {
        echo "<tr>";
        echo "<td>" . ($index == 0 ? $no : "") . "</td>";
        echo "<td>" . ($index == 0 ? $mahasiswa['nama'] : "") . "</td>";
        echo "<td>{$matkul['nama_matkul']}</td>";
        echo "<td>{$matkul['sks']}</td>";
        echo "<td>" . ($index == 0 ? $totalSks : "") . "</td>";
        echo "<td class='" . ($index == 0 ? $classKeterangan : "") . "'>" . ($index == 0 ? $keterangan : "") . "</td>";
        echo "</tr>";
    }

    echo "<tr class='section-border'></tr>";

    $no++;
}

echo "</table>";
?>

</body>
</html>
