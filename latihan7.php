<!DOCTYPE html>
<html>

<head>

    <title>Latihan Form</title>
</head>

<body>
    <form action="" method="POST"> Nilai <input type="text" name="nilai"> <input type="submit" name="tombol_hasil" value="Hasil">
    </form>
    <?php
    if (isset($_POST['tombol_hasil'])) {
        $nilai = $_POST['nilai'];
        if ($nilai == 50) {
            echo "Nilai adalah : " . $nilai;
        } else if ($nilai == 90) {
            echo "Nilai adalah : " . $nilai;
        } else {
            echo "Nilai tidak Sesuai...!";
        }
    }
    ?>
</body>

</html>