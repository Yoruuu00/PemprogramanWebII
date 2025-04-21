<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        <input type="text" name="input">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $input = $_POST['input'];
        $panjang = strlen($input);

        echo "<p><strong>Input:</strong><br>$input</p>";
        echo "<p><strong>Output:</strong><br>";

        for ($i = 0; $i < $panjang; $i++) {
            $karakter = $input[$i];
            echo strtoupper($karakter);
            for ($j = 1; $j < $panjang; $j++) {
                echo strtolower($karakter); 
            }
        }

        echo "</p>";
    }
    ?>
</body>
</html>
