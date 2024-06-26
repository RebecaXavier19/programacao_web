<?php

require_once '../../orm/exame.php';

class BD {

	public function cadastra($exame) {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		$sql = "insert into exame (nome,data) values ('{$exame->getNome()}','{$exame->getData()}')";
		//print $sql;
		print 'Cadastro realizado com sucesso!';
		
		mysqli_query($bd, $sql);
		mysqli_close($bd);
	}	

	public function apaga($exame) {

	}

	public function atualiza($exame) {

	}

	public function seleciona($exame) {

	}

	public function selecionaTodos() {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		$sql = "select * from exame";
		$dados = mysqli_query($bd, $sql);
		$arreyExames = [];
		for($i = 0; $i< mysqli_num_rows($dados); $i++) {
			$linha = mysqli_fetch_array($dados);
			$e = new exame();
			$e->setData($linha['data']);
			$e->setNome($linha['nome']);
			$arreyExames[$i] = $e;
		}
		return $arreyExames;

	}	
}
?>