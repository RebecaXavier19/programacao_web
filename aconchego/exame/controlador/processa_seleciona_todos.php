<?php
	require_once '../../orm/exame.php';
	require_once '../bd/BD.php';
	
	$bd = new BD();
	$exame = $bd->selecionaTodos();
	
	print "<table border=2>";
	//cabeçalho da tabela
	print "<tr>";
	print "<th>Nome</th>";
	print "<th>Data</th>";
	print "</tr>";	
	//corpo da tabela	
	foreach($exame as $e) {
		print "<tr>";
		print "<td>{$e->getNome()}</td>";
		print "<td>{$e->getData()}</td>";
		print "</tr>";
	}
	print "</table>";
?>