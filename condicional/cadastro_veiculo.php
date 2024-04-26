<?php
$renovam = $_POST['renovam'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$anoM = $_POST['anoM'];
$anoF = $_POST['anoF'];

$separador = "@#@";
if(file_exists('veiculo.txt')){
    $linha = "\n". $renovam . $separador. $marca. $separador .$modelo. $separador . $cor .$separador. $anoM. $separador.$anoF;
    } else{
    $linha =  $renovam . $separador. $marca. $separador .$modelo. $separador . $cor .$separador. $anoM. $separador.$anoF;
       
    }
$veiculo = fopen('veiculo.txt'. 'a+');
fwrite($veiculo, $linha);
fclose($veiculo);


?>