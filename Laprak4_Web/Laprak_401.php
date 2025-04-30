<!DOCTYPE html>
<html>

<body>

<form method="post">
    Panjang : <input type="text" name="panjang"><br>
    Lebar : <input type="text" name="lebar"><br>
    Nilai : <input type="text" name="nilai"><br>
    <input type="submit" name="submit" value="Cetak"><br><br>
</form>

<?php
if (isset($_POST['submit'])) {
    $panjang = (int) $_POST['panjang']; 
    $lebar = (int) $_POST['lebar'];     
    $nilai = explode(" ", trim($_POST['nilai']));

    if (count($nilai) < $panjang * $lebar) {
        echo "<p style='color:red;'>Jumlah nilai tidak cukup untuk membentuk matriks $panjang x $lebar</p>";
    } else {
        $index = 0;
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        for ($i = 0; $i < $panjang; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $lebar; $j++) {
                echo "<td align='center'>" . htmlspecialchars($nilai[$index]) . "</td>";
                $index++;
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>

</body>
</html>
