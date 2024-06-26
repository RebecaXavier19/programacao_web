<?php

require_once '../../orm/pessoa.php';

class BD {

	public function cadastra($pessoa) {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		//Exemplo de instrução SQL
		//insert into pessoa (nome,genero, email,id_nivel_condutor, id_nivel_conduzido) values ('Claudio Rodolfo', 'masculino','claudiorodolfo@ifba.edu.br', 1,1)
		$sql = "insert into pessoa (nome,genero,email,senha, id_nivel_condutor,id_nivel_conduzido) values ('{$pessoa->getNome()}','{$pessoa->getGenero()}','{$pessoa->getEmail()}','{$pessoa->getSenha()}',{$pessoa->getId_nivel_condutor()},{$pessoa->getId_nivel_conduzido()})";
		//print $sql;
		print 'Cadastro realizado com sucesso!';
		
		mysqli_query($bd, $sql);
		mysqli_close($bd);
	}	

	public function autentica($pessoa) {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		$sql = "select id_pessoa from pessoa where email = '{$pessoa->getEmail()}' and senha = '{$pessoa->getSenha()}'";
		//print $sql;
		
		$linhas = mysqli_query($bd, $sql);
		mysqli_close($bd);
		if (mysqli_num_rows($linhas) == 1){
			return true;
		}else
			return false;
	}

	
	public function apaga($pessoa) {

	}

	public function atualiza($pessoa) {

	}

	public function seleciona($pessoa) {

	}

	public function selecionaTodos() {
		$bd = mysqli_connect('localhost', 'root', 'admin', 'aconchego');
		$sql = "select * from pessoa";
		$dados = mysqli_query($bd, $sql);
		$arrayPessoas = [];
		for($i = 0; $i< mysqli_num_rows($dados); $i++) {
			$linha = mysqli_fetch_array($dados);
			$c = new pessoa();
			$c->setNome($linha['nome']);
			$c->setGenero($linha['genero']);
			$c->setEmail($linha['email']);
			$c->setSenha($linha['senha']); //Não retornar as senhas
			$c->setId_nivel_conduzido($linha['id_nivel_condutor']);
			$c->setId_nivel_conduzido($linha['id_nivel_conduzido']);
			$arrayPessoas[$i] = $c;
		}
		return $arrayPessoas;
	}
}
?>