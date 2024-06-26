<?php
//Mapeamento Objeto Relacional
//Object-Relational Mapping - ORM

//avaliacao_cabecalho.php
	class avaliacao_cabecalho {
		private $id_avaliacao;
		private $id_pessoa_aluno;
		private $id_pessoa_professor;		
		private $id_nivel;
		private $id_exame;
		private $papel;
		
		public function getId_avaliacao() {
			return $this->id_avaliacao;
		}
		
		public function setId_avaliacao($id_avaliacao) {
			$this->id_avaliacao = $id_avaliacao;
		}

		public function getId_pessoa_aluno() {
			return $this->id_pessoa_aluno;
		}
		
		public function setId_pessoa_aluno($id_pessoa_aluno) {
			$this->id_pessoa_aluno= $id_pessoa_aluno;
		}

		public function getId_pessoa_professor() {
			return $this->id_pessoa_professor;
		}
		
		public function setId_pessoa_professor($id_pessoa_professor) {
			$this->id_pessoa_professor = $id_pessoa_professor;
		}
		
		public function getId_nivel() {
			return $this->id_nivel;
		}
		
		public function setId_nivel($id_nivel) {
			$this->id_nivel = $id_nivel;
		}
		
		public function getId_exame() {
			return $this->id_exame;
		}
		
		public function setIdEmpresa($id_exame) {
			$this->id_exame = $id_exame;
		}		
		public function getPapel() {
			return $this->papel;
		}
		
		public function setPapel($papel) {
			$this->papel = $papel;
		}		
	}
?>