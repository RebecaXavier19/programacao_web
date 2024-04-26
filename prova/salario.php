<?php
$n = $_POST["nome"];
$gan = $_POST["ganho"];
$h = $_POST["horas"];
$bruto = ($gan*$h);
print "<h1>". " salario R$ ". $bruto. " bruto!"."<h1>";
$liquido =( $bruto -(11/100)- (8/100) - (5/100));
print "<h1>". " salario R$ " .$liquido . " liquido!"."<h1>";

?>