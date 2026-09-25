<?php

$a = (5 == "5"); // Daría true porque compara solo el valor
$b = (5 === "5"); // Daría false porque aquí además compara el tipo que debe ser int pero el segundo es un string
$c = (10 > 5 && 3 < 2); //el primero sería true, el segundo false por lo que el según las puertas lógicas true & false = false 
$d = !$b || $c; // !$b es true, por lo que true or false da true

// == compara valores ignorando el tipo mientras que === si que lo tiene en cuenta.