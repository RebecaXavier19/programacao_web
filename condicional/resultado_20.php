<?php
$numero = $_POST["numero"];

 if ($numero > 20){
    $m = $numero / 2;
    print "<h1>" .$m . "<h1>";
 } else{
    print "<h1>" . $numero . "</h1>";
 }

?>