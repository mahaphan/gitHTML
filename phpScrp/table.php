<!DOCTYPE html>
<html>
    <head>
        <title>ตารางสูตรคูณ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="w3-css.css">
    </head>
    <body>
        <table border=1>
            <h3>ตารางสูตรคูณ</h3>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo '<tr>';
                for ($j = 1; $j <= 25; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>