<?php
	require_once '../../orm/avaliacao_corpo.php';
	require_once '../bd/BD.php';
	
	$avaliacao_corpo = new avaliacao_corpo();
	$avaliacao_corpo->setId_habilidade($_POST['id_habilidade']);
	$avaliacao_corpo->setNota($_POST['nota']);
	
	
	$bd = new BD();
	$bd->cadastra($avaliacao_corpo);
?>