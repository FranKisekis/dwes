<?php

$paginas = [100, 200, 45, 782, 123, 743, 998, 8];
$paginas2 = [1030, 2003, 453, 78332, 1233, 7413, 98, 87];

// unset, merge y sort
unset($paginas2[1]);
$nuevo = array_merge($paginas, $paginas2);
sort($nuevo);

foreach ($nuevo as $cosa) {
 echo $cosa . '<br>';
}
