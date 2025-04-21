<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <form method="post">
        Jumlah Peserta : <input type="number" name="jumlah" min="1"><br>
        <input type="submit" value="Cetak">
    </form>

    <br>

    <?php
    if (isset($_POST['jumlah'])) {
        $jumlah = $_POST['jumlah'];
        $i = 1;

        while ($i <= $jumlah) {
            if ($i % 2 == 0) {
                echo "<p style='color:green'><b>Peserta ke-$i</b></p>";
            } else {
                echo "<p style='color:red'><b>Peserta ke-$i</b></p>";
            }
            $i++;
        }
    }
    ?>
</body>
</html>
