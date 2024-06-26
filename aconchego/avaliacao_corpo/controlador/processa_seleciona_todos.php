<?php
	require_once '../../orm/avaliacao_corpo.php';
	require_once '../bd/BD.php';
	
	$bd = new BD();
	$avaliacao_corpo = $bd->selecionaTodos();
	
	print "<table border=2>";
	//cabeçalho da tabela
	print "<tr>";
	print "<th>ID Habilidade</th>";
	print "<th>ID Nota</th>";
	print "</tr>";	
	//corpo da tabela	
	foreach($nivel as $n) {
		print "<tr>";
		print "<td>{$n->getId_habilidade()}</td>";
		print "<td>{$n->getNota()}</td>";
		print "</tr>";
	}
	print "</table>";
?>