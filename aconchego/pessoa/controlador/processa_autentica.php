<?php
	require_once '../../orm/pessoa.php';
	require_once '../bd/BD.php';
	
	$pessoa = new pessoa();
	$pessoa->setEmail($_POST['email']);	
	$pessoa->setSenha(md5($_POST['senha']));
	
	$bd = new BD();
	$foiAutenticado = $bd->autentica($pessoa);
	
	if ($foiAutenticado)
		print "Usuário Autenticado com Sucesso!";
	else
		print "Usuário ou senha Inválidos";
?>