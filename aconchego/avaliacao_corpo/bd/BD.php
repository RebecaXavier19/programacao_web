<?php

require_once '../../orm/avaliacao_corpo.php';

class BD {

	public function cadastra($avaliacao_corpo) {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		$sql = "insert into avaliacao_corpo (id_abilidade,nota) values ('{$avaliacao_corpo->getId_habilidade()}','{$avaliacao_corpo->getNota()}')";
		//print $sql;
		print 'Cadastro realizado com sucesso!';
		
		mysqli_query($bd, $sql);
		mysqli_close($bd);
	}	

	public function apaga($avaliacao_corpo) {

	}

	public function atualiza($avaliacao_corpo) {

	}

	public function seleciona($avaliacao_corpo) {

	}

	public function selecionaTodos() {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		$sql = "select * from avaliacao_corpo";
		$dados = mysqli_query($bd, $sql);
		$arrayAvaliacao = [];
		for($i = 0; $i< mysqli_num_rows($dados); $i++) {
			$linha = mysqli_fetch_array($dados);
			$n = new avaliacao_corpo();
			$n->setId_habilidade($linha['id_habilidade']);
			$n->setNota($linha['nota']);
			$arrayAvaliacao[$i] = $n;
		}
		return $arrayAvaliacao;

	}	
}
?>