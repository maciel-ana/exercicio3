<?php

$numero1 = 77;
$numero2 = 22;
$string = "Olá, mundo!";


if (is_numeric($numero1)) {
    $resultado = $numero1 * 2;

    if ($resultado > 100) {
     
        echo "O resultado ($resultado) é maior que 100!";
    } else {
        echo "O resultado ($resultado) não é maior que 100.";
    }
} else {
    echo "A variável não é um número.";
}
?>
