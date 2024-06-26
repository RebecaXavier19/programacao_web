<?php

require_once '../../orm/musica.php';

class BD {

	public function cadastra($musica) {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		$sql = "insert into musica (nome) values ('{$musica->getNome()}')";
		//print $sql;
		print 'Cadastro realizado com sucesso!';
		
		mysqli_query($bd, $sql);
		mysqli_close($bd);
	}	

	public function apaga($musica) {

	}

	public function atualiza($musica) {

	}

	public function seleciona($musica) {

	}

	public function selecionaTodos() {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		$sql = "select * from musica";
		$dados = mysqli_query($bd, $sql);
		$arrayMusicas = [];
		for($i = 0; $i< mysqli_num_rows($dados); $i++) {
			$linha = mysqli_fetch_array($dados);
			$m = new musica();
			$m->setNome($linha['nome']);
			$arrayMusicas[$i] = $m;
		}
		return $arrayMusicas;

	}	
}
?>