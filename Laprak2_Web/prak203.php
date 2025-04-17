<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>
    <h3></h3>

    <form method="post">
        Nilai : <input type="number" name="nilai" required><br><br>

        Dari :<br>
        <input type="radio" name="dari" value="C" checked> Celcius<br>
        <input type="radio" name="dari" value="F"> Fahrenheit<br>
        <input type="radio" name="dari" value="Re"> Reamur<br>
        <input type="radio" name="dari" value="K"> Kelvin<br><br>

        Ke :<br>
        <input type="radio" name="ke" value="C"> Celcius<br>
        <input type="radio" name="ke" value="F" checked> Fahrenheit<br>
        <input type="radio" name="ke" value="Re"> Reamur<br>
        <input type="radio" name="ke" value="K"> Kelvin<br><br>

        <input type="submit" name="konversi" value="Konversi">
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];

        if ($dari == 'C') {
            $celcius = $nilai;
        } else if ($dari == 'F') {
            $celcius = ($nilai - 32) * 5 / 9;
        } else if ($dari == 'Re') {
            $celcius = $nilai * 5 / 4;
        } else if ($dari == 'K') {
            $celcius = $nilai - 273.15;
        }

        if ($ke == 'C') {
            $hasil = $celcius;
            $satuan = "°C";
        } else if ($ke == 'F') {
            $hasil = ($celcius * 9 / 5) + 32;
            $satuan = "°F";
        } else if ($ke == 'Re') {
            $hasil = $celcius * 4 / 5;
            $satuan = "°Re";
        } else if ($ke == 'K') {
            $hasil = $celcius + 273.15;
            $satuan = "K";
        }

        // Tampilkan hasil
        echo "<h3>Hasil Konversi: " . round($hasil, 2) . " $satuan</h3>";
    }
    ?>
</body>
</html>