<?php
	require_once '../../orm/exame.php';
	require_once '../bd/BD.php';
	
	$bd = new BD();
	$exame = $bd->selecionaTodos();
	
	print "<table border=2>";
	//cabeçalho da tabela
	print "<tr>";
	print "<th>Nome</th>";
	print "</tr>";	
	//corpo da tabela	
	foreach($nivel as $n) {
		print "<tr>";
		print "<td>{$n->getNome()}</td>";

		print "</tr>";
	}
	print "</table>";
?>