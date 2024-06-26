<?php
	require_once '../../orm/avaliacao_cabecalho.php';
	require_once '../bd/BD.php';
	
	$bd = new BD();
	$avaliacao_cabecalho = $bd->selecionaTodos();
	
	print "<table border=2>";
	//cabeçalho da tabela
	print "<tr>";
	print "<th>Id Cabecalho</th>";
	print "<th>Id Aluno</th>";
	print "<th>Id professor</th>";
	print "<th>Id Nivel</th>";
	print "<th>Id Exame</th>";
	print "<th>Id Papel</th>";
	print "</tr>";	
	//corpo da tabela	
	foreach($avaliacao_cabecalho as $c) {
		print "<tr>";
		print "<td>{$c->getId_cabecalho()}</td>";
		print "<td>{$c->getId_pessoa_aluno()}</td>";
		print "<td>{$c->getId_pessoa_professor()}</td>";
		print "<td>{$c->getId_nivel()}</td>";
		print "<td>{$c->getId_exame()}</td>";
		print "<td>{$c->getPapel()}</td>";
		print "</tr>";
	}
	print "</table>";
?>