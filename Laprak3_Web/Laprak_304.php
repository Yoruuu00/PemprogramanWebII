<!DOCTYPE html>
<html>
<head>
    <title>Jumlah Bintang</title>
</head>
<body>

    <?php

    $jumlah = 0;

    if (isset($_POST['jumlah'])) {
        $jumlah = (int)$_POST['jumlah'];
    }

    if (isset($_POST['tambah'])) {
        $jumlah++;
    }

    if (isset($_POST['kurang'])) {
        $jumlah--;
        if ($jumlah < 0) $jumlah = 0;
    }

    if (isset($_POST['submit'])) {
        $jumlah_input = (int)$_POST['jumlah_input'];
        $jumlah = $jumlah_input;
    }
    ?>

    <form action="" method="post">

        <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">

        <label for="jumlah_input">Jumlah bintang: </label>
        <input type="number" name="jumlah_input" id="jumlah_input" value="<?php echo $jumlah; ?>"> <br>

        <button type="submit" name="submit">Submit</button> <br><br>

        <?php

        for ($i = 0; $i < $jumlah; $i++) {
            echo '<img src="bintangS.png" width="40" alt="Bintang">';
        }
        ?>

        <br><br>

        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
    </form>

</body>
</html>
