<!DOCTYPE html>
<html>
<head>
    <title>Mengurutkan Nama</title>
</head>
<body>

<h2>input Nama</h2>
<form method="post">
    Nama 1: <input type="text" name="nama1"><br><br>
    Nama 2: <input type="text" name="nama2"><br><br>
    Nama 3: <input type="text" name="nama3"><br><br>
    <input type="submit" value="Urutkan">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = array($_POST["nama1"], $_POST["nama2"], $_POST["nama3"]);
    sort($nama);

    echo "<h3>Hasil Pengurutan:</h3>";
    foreach ($nama as $n) {
        echo $n . "<br>";
    }
}
?>

</body>
</html>
