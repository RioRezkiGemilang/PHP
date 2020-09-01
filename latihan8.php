<!DOCTYPE html>
<html>

<head>

    <title>Kalkulator</title>
</head>

<body>
    <form action="" method="POST">
        Nilai 1 <input type="text" name="nilai 1"> <br><br>
        Nilai 2 <input type="text" name="nilai 2"> <br><br>
        <input type="submit" name="tombol_hasil" value="+">
        <input type="submit" name="tombol_hasil" value="-">
        <input type="submit" name="tombol_hasil" value="x">
        <input type="submit" name="tombol_hasil" value="/">

    </form>
    <?php
    if (isset($_POST['tombol_hasil'])) {
        $nilai_1 = $_POST['nilai_1'];
        $nilai_2 = $_POST['nilai_2'];
        $hasil = $_POST['tombol_hasil'];


        if ($hasil == "+") {
            if ($nilai_1 != "" and $nilai_2 != "") {
                echo $nilai_1 + $nilai_2;
            } else {
                echo "Silahkan Isi Data diatas...!";
            }
        } else if ($hasil == "-") {
            if ($nilai_1 and $nilai_2) {
                echo $nilai_1 - $nilai_2;
            } else {
                echo "Silahkan Isi Data diatas...!";
            }
        } else if ($hasil == "x") {
            if ($nilai_1 and $nilai_2) {
                echo $nilai_1 * $nilai_2;
            } else {
                echo "Silahkan Isi Data diatas...!";
            }
        } else if ($hasil == "/") {
            if ($nilai_1 and $nilai_2) {
                echo $nilai_1 / $nilai_2;
            } else {
                echo "Silahkan Isi Data diatas...!";
            }
        }
    }
    ?>
</body>

</html>