<?php
	require_once '../../orm/pessoa.php';
	require_once '../bd/BD.php';
	
	$bd = new BD();
	$pessoa = $bd->selecionaTodos();
	
	print "<table border=2>";
	//cabeçalho da tabela
	print "<tr>";
	print "<th>Nome</th>";
	print "<th>Nenero</th>";
	print "<th>E-mail</th>";
	print "<th>Id Nivel Condutor</th>";
	print "<th>Id Nivel Conduzido</th>";
	print "</tr>";	
	//corpo da tabela	
	foreach($pessoa as $c) {
		print "<tr>";
		print "<td>{$c->getNome()}</td>";
		print "<td>{$c->getGenero()}</td>";
		print "<td>{$c->getEmail()}</td>";
		print "<td>{$c->getId_nivel_condutor()}</td>";
		print "<td>{$c->getId_nivel_conduzido()}</td>";
		print "</tr>";
	}
	print "</table>";
?>