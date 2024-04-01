<?php
$N = rand(100, 999);
$tries = 0;
do {
    $tries++;
    $random = rand(100, 999);
} while ($random != $N);

echo "Nombre généré aléatoirement : $N<br>";
echo "Nombre de tentatives : $tries";
?>
