<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo8</h1>
    <p></p>
    <h2>Résultat</h2>
    <?php
        $number = 8;
        echo "Table de $number :<br>";
        for($i = 1; $i <= 10; $i++) {
            $multiplication = $i * $number;
            echo "$i x $number = $multiplication<br>";
        }
?>
</body>
</html>