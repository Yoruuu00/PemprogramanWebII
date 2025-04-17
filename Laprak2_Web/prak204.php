<!DOCTYPE html>
<html>
<head>
    <title>Baca Ejaan Bilangan</title>
</head>
<body>

    <form method="post">
        Nilai : <input type="number" name="nilai" required><br><br>
        <input type="submit" name="konversi" value="Konversi">
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $hasil = "";

        if ($nilai < 0 || $nilai >= 1000) {
            $hasil = "Anda Menginput Melebihi Limit Bilangan";
        } else if ($nilai == 0) {
            $hasil = "Nol";
        } else if ($nilai >= 1 && $nilai <= 9) {
            $hasil = "Satuan";
        } else if ($nilai >= 10 && $nilai <= 19) {
            $hasil = "Belasan";
        } else if ($nilai >= 20 && $nilai <= 99) {
            $hasil = "Puluhan";
        } else if ($nilai >= 100 && $nilai <= 999) {
            $hasil = "Ratusan";
        }

        echo "<h3>Hasil: " . strtolower($hasil) . "</h3>";
    }
    ?>
</body>
</html>
