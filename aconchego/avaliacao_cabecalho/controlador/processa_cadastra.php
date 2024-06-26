<?php
	require_once '../../orm/avaliacao_cabecalho.php';
	require_once '../bd/BD.php';
	
	$avaliacao_cabecalho = new avaliacao_cabecalho();
	$avaliacao_cabecalho->setId_avaliacao($_POST['id_avaliacao']);
	$avaliacao_cabecalho->setId_pessoa_aluno($_POST['id_pessoa_aluno']);
	$avaliacao_cabecalho->setId_pessoa_professor($_POST['id_pessoa_professor']);		
	$avaliacao_cabecalho->setId_nivel($_POST['id_nivel']);
	$avaliacao_cabecalho->setId_exame($_POST['id_exame']);
	$avaliacao_cabecalho->setPapel($_POST['papel']);
	
	$bd = new BD();
	$bd->cadastra($avaliacao_cabecalho);
?>