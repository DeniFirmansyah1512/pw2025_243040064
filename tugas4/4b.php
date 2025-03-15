<?php

$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];


echo "<h3>Macam-macam perangkat keras komputer</h3>";
echo "<ol>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ol>";


array_push($hardware, "Card Reader", "Modem");


sort($hardware);


echo "<h3>Macam-macam perangkat keras komputer baru</h3>";
echo "<ol>";
foreach ($hardware as $item) {

    if ($item == "Card Reader" || $item == "Modem") {
        echo "<li>$item</u></li>";
    } else {
        echo "<li>$item</li>";
    }
}
echo "</ol>";