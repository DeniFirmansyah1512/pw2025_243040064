<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan Catur</title>
    <style>
        .chessboard {
            display: grid;
            grid-template-columns: repeat(5, 50px);
            grid-template-rows: repeat(5, 50px);
            width: 250px;
            height: 250px;
            border: 2px solid black;
        }
        .square {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="chessboard">
        <?php
        for ($row = 0; $row < 5; $row++) {
            for ($col = 0; $col < 5; $col++) {
                $class = ($row + $col) % 2 == 0 ? "black" : "white";
                echo "<div class='square $class'></div>";
            }
        }
        ?>
    </div>
</body>
</html>