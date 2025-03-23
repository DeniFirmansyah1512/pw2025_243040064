<?php

$cars = [
    [
        "merek" =>    "Ferarri",
        "warna" =>    "Merah",
        "pendiri" => "Enzo Ferarri",
        "produksi" => "Italia",
        "gambar" => "ferarri.jpg"

    ],
    [
        "merek" =>    "Porsche",
        "warna" =>    "Merah",
        "pendiri" =>  "Dr. ing .h.c.f Porsche",
        "produksi" => "Jerman",
        "gambar"  => "porsche.jpeg"

    ],
    [
        "merek" =>    "Audi",
        "warna" =>    "Silver",
        "pendiri" =>  "August Horch",
        "produksi" => "Jerman",
        "gambar" => "audi.jpeg"

    ],
    [
        "merek" =>    "Buggati",
        "warna" =>    "Merah",
        "pendiri" =>  "Ettore Buggati",
        "produksi" => "Prancis",
        "gambar" => "buggati.jpeg"

    ],
    [
        "merek" =>    "Bmw",
        "warna" =>    "Hitam",
        "pendiri" =>  "Karl Rapp",
        "produksi" => "Jerman",
        "gambar" => "bmw.jpeg"

    ],
    [
        "merek" =>    "Ford Mustang",
        "warna" =>    "Merah",
        "pendiri" =>  "Leo lacocca",
        "produksi" => "amerika",
        "gambar" => "mustang.jpeg"

    ],
    [
        "merek" =>    "Mercy",
        "warna" =>    "Merah",
        "pendiri" =>  "Karl Benz",
        "produksi" => "Jerman",
        "gambar" => "mercy.jpeg"

    ],
    [
        "merek" =>    "Honda Civic",
        "warna" =>    "Merah",
        "pendiri" =>  "Kichiro Toyoda",
        "produksi" => "Soichiro Honda",
        "gambar" => "civic.jpeg"

    ],
    [
        "merek" =>    "Toyota Supra",
        "warna" =>    "Merah",
        "pendiri" =>  "Sakichi Toyoda",
        "produksi" => "Austria",
         "gambar" => "civic.jpeg"

    ],
    [
        "merek" =>    "Toyota Avanza",
        "warna" =>    "Merah",
        "pendiri" =>  "Kichiro Toyoda",
        "produksi" => "Karawang Indonesia",
         "gambar" => "civic.jpeg"
    ],

]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>TIPE-TIPE MOBIL</h1>
<body>
  <?php foreach( $cars as $car ) :?>
        
    <ul>
    <li>
        <img src="img/<?= $car["gambar"]; ?>">
    </li>
        <li>Merek : <?= $car["merek"]; ?></li>
        <li>Warna : <?= $car["warna"]; ?></li>
        <li>Pendiri : <?= $car["pendiri"]; ?></li>
        <li>Produksi : <?= $car["produksi"]; ?></li>
    
  </ul>

    <?php endforeach; ?>
    
</body>
</html>