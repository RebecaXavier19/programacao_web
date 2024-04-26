<?php
$cpf = $POST['cpf'];

$indice_cpf = 0;
$soma = 0;
for ($i = 10; $i >= 2; $i--) {
    $soma = $soma + ($cpf[$indice_cpf] * $i);
    $indice_cpf++;
}
$resto = $soma % 11;
$dv1 = 11 - $resto;
print $dv1;
?>