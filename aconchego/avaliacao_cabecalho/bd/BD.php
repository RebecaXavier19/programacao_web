<?php

require_once '../../orm/avaliacao_cabecalho.php';

class BD {

	public function cadastra($avaliacao_cabecalho) {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		$sql = "insert into avaliacao_cabecalho (id_avaliacao,id_pessoa_aluno,id_pessoa_professor,id_nivel,id_exame,papel) values ('{$avaliacao_cabecalho->getAvaliacao_cabecalho()}','{$avaliacao_cabecalho->getId_pessoa_aluno()}','{$avaliacao_cabecalho->getId_pessoa_professor()}','{$avaliacao_cabecalho->getId_nivel()}','{$avaliacao_cabecalho->getId_exame()}','{$avaliacao_cabecalho->getPapel()}')";
		//print $sql;
		print 'Cadastro realizado com sucesso!';
		
		mysqli_query($bd, $sql);
		mysqli_close($bd);
	}	

	public function apaga($avaliacao_cabecalho) {

	}

	public function atualiza($avaliacao_cabecalho) {

	}

	public function seleciona($avaliacao_cabecalho) {

	}

	public function selecionaTodos() {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		$sql = "select * from avaliacao_cabecalho";
		$dados = mysqli_query($bd, $sql);
		$arrayAvaliacao = [];
		for($i = 0; $i< mysqli_num_rows($dados); $i++) {
			$linha = mysqli_fetch_array($dados);
			$a = new avaliacao_cabecalho();
			$a->setId_avaliacao($linha['id_avaliacao']);
			$a->setId_pessoa_aluno($linha['id_pessoa_aluno']);
			$a->setId_pessoa_professor($linha['id_pessoa_professor']);
			$a->setId_nivel($linha['id_pessoa_nivel']);
			$a->setId_exame($linha['id_exame']);
			$a->setPapel($linha['papel']);
			$arrayAvaliacao[$i] = $a;
		}
		return $arrayAvaliacao;

	}	
}
?>