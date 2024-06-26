<?php
	require_once '../../orm/nivel.php';
	require_once '../bd/BD.php';
	
	$nivel = new nivel();
	$nivel->setNome($_POST['nome']);
	
	
	$bd = new nivel();
	$bd-> cadastra ($nivel);
?>