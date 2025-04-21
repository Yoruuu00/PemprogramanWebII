<!DOCTYPE html>
<html>
<head>
    <title>Segitiga Gambar</title>
</head>
<body>
    <form action="" method="post">
        <label for="tinggi">Tinggi: </label> 
        <input type="number" name="tinggi" id="tinggi" required> <br>

        <label for="linkimg">Alamat Gambar: </label> 
        <input type="text" name="linkimg" id="linkimg" required> <br>

        <button type="submit" name="cetak">Cetak</button> <br><br>
    </form>

    <?php 
    if (isset($_POST['cetak'])) {
        $tinggi = (int)$_POST['tinggi'];
        $linkimg = htmlspecialchars($_POST['linkimg']);
        
        echo "<div style='font-family: monospace; line-height: 1.2;'>";
        
        for ($i = 0; $i < $tinggi; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo "<span style='display:inline-block; width:20px;'></span>";
            }
            for ($j = 0; $j < $tinggi - $i; $j++) {
                echo "<img src='$linkimg' width='20' alt=''>";
            }
            echo "<br>";
        }

        echo "</div>";
    }
    ?>
</body>
</html>

</html>