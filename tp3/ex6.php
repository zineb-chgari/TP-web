<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$delta = $b * $b - 4 * $a * $c;
if ($delta > 0) {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "Les racines de l'équation sont : x1 = $x1 et x2 = $x2";
} elseif ($delta == 0) {
    $x = -$b / (2 * $a);
    echo "L'équation a une racine double : x = $x";
} else {
    echo "L'équation n'a pas de solution réelle.";
}
?>
