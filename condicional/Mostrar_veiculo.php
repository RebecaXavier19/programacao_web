<?php
$arquivo= fopen('veiculo.txt','r'); //r= read/ler 
print "<table border = '2' >";
while(feof($arquivo)==false) {
    $linha= fgets($arquivo);
    $partes= explode("@#@", $linha);
    print "<tr>";
    print "<td>". $partes[1]. "</td>". '<br>';
    print "</tr>";
}
fclose($arquivo);
?>