<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php
    echo "<h2>hola mundo php</h2>";

    $nombre = "santiago ";
    $apellido = "dominguez";
    $año_nacimiento ="2000";
    $año_actual="2023";

    $edad = $año_actual - $año_nacimiento;

    ?>

    <h2> Mi nombre es <?php echo $nombre , $apellido ?> </h2>
    <h2> y tengo <?php echo $edad ?> años </h2>


</body>
</html>