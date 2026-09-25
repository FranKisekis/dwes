<?php

$array = ["Xenoblade", "Zelda", "Trails of Cold Steel", "Rune Factory"];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio32</title>
</head>

<body>
    <h1><?= htmlspecialchars('Ejercicio32 PHP + HTML')?></h1>
    <ul>
        <?php 
            foreach ($array as $titulo) {
            echo '<li>'. $titulo . '<li>';
        }
        ?>
    </ul>
</body>
    
</html>