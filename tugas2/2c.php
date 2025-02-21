<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse:separate;
            border-spacing: 0 px;
        }
        td {
            width: 30px;
            height:30px;
            text-align:center;
            border: 1px solid black;
            background-color: #e57373;
            font-size: 17px;

        }

    </style>
</head>
<body>
            <table>
                <?php
                $size = 10;
                for ($i = $size; $i >= 1; $i--) {
                    echo "<tr>";                 
                    for ($j= 1; $j  <= $i; $j++) {
                        echo "<td>$j</td>";
                    }
                    echo "</tr>";
                }
            ?>
            </table>

    
</body>
</html>