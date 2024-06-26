<?php
	require_once '../../orm/pessoa.php';
	require_once '../bd/BD.php';
	
	$pessoa = new pessoa();
	$pessoa->setNome($_POST['nome']);
	$pessoa->setGenero($_POST['genero']);
	$pessoa->setEmail($_POST['email']);	
	$pessoa->setSenha(md5($_POST['senha']));	
	$pessoa->setId_nivel_condutor($_POST['id_nivel_condutor']);
	$pessoa->setId_nivel_conduzido($_POST['id_nivel_conduzido']);
	
	$bd = new BD();
	$bd->cadastra($pessoa);
?>