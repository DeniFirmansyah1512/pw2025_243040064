<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan6b</title>
    <style>
        .box {
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border: 1px solid black;
            margin: 2px;
            font-size: 18px;
        }
        .blue {
            background-color: lightblue;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<h2>Masukkan Angka</h2>
<form method="post">
    <input type="number" name="angka" required min="1">
    <button type="submit">Tampilkan</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai angka dari input form
    $angka = (int)$_POST['angka'];

    echo "<h3>Pola dengan angka: $angka</h3>";

    for ($i = $angka; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            $color = ($i % 2 == 0) ? 'blue' : 'white'; // Pola warna bergantian
            echo "<div class='box $color'>$i</div>";
        }
        echo "<br>";
    }
}
?>

</body>
</html>