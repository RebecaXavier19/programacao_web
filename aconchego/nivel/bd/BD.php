<?php

require_once '../../orm/nivel.php';

class BD {

	public function cadastra($nivel) {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		$sql = "insert into nivel (nome) values ('{$nivel->getNome()}')";
		//print $sql;
		print 'Cadastro realizado com sucesso!';
		
		mysqli_query($bd, $sql);
		mysqli_close($bd);
	}	

	public function apaga($nivel) {

	}

	public function atualiza($nivel) {

	}

	public function seleciona($nivel) {

	}

	public function selecionaTodos() {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		$sql = "select * from nivel";
		$dados = mysqli_query($bd, $sql);
		$arreynivel = [];
		for($i = 0; $i< mysqli_num_rows($dados); $i++) {
			$linha = mysqli_fetch_array($dados);
			$n = new nivel();
			$n->setNome($linha['nome']);
			$arreynivel[$i] = $n;
		}
		return $arreynivel;

	}	
}
?>