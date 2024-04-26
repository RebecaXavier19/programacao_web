<?php
$n = $_POST["nome"];
$gan = $_POST["ganho"];
$h = $_POST["hora"];
$bruto = ($gan*$h);
print "<h1>". " salario ". $bruto. "  bruto!"."<h1>";
$liquido =( $bruto -(11/100)- (8/100) - (5/100));
print "<h1>". " salario" .$liquido . "liquido!"."<h1>";

?>