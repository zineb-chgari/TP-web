<?php
$N = rand(100, 999);
$tries = 0;
for ($tries = 1; $random != $N; $tries++) {
    $random = rand(100, 999);
}

echo "Nombre généré aléatoirement : $N<br>";
echo "Nombre de tentatives : $tries";
?>