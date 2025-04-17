<!DOCTYPE html>
<html>
<head>
    <title>Form PHP</title>
    <style>
        .required { color: red;}
        .error { color: red; font-size: 1 em; margin-left: 10px; }
    </style>
</head>
<body>

<?php
$name = $nim = $gender = "";
$nameErr = $nimErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Nama wajib tidak boleh kosong";
    } else {
        $name = $_POST["name"];
    }

    if (empty($_POST["nim"])) {
        $nimErr = "NIM wajib tidak boleh kosong";
    } else {
        $nim = $_POST["nim"];
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Jenis kelamin wajib tidak boleh kosong";
    } else {
        $gender = $_POST["gender"];
    }
}
?>

<h2></h2>
<form method="post" action="">
    <label>Nama:</label>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="required">*</span>
    <span class="error"><?php echo $nameErr; ?></span>
    <br>

    <label>NIM:</label>
    <input type="text" name="nim" value="<?php echo $nim; ?>">
    <span class="required">*</span>
    <span class="error"><?php echo $nimErr; ?></span>
    <br>

    <label>Jenis Kelamin:</label>
    <span class="required">*</span><br>
    <input type="radio" name="gender" value="Laki-laki" <?php if ($gender == "Laki-laki") echo "checked"; ?>> Laki-laki<br>
    <label></label>
    <input type="radio" name="gender" value="Perempuan" <?php if ($gender == "Perempuan") echo "checked"; ?>> Perempuan
    <span class="error"><?php echo $genderErr; ?></span>
    <br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($nimErr) && empty($genderErr)) {
    echo "<h2>Masukan Anda:</h2>";
    echo "Nama: $name<br>";
    echo "NIM: $nim<br>";
    echo "Jenis Kelamin: $gender<br>";
}
?>

</body>
</html>
