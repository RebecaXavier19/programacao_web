<?php
//Mapeamento Objeto Relacional
//Object-Relational Mapping - ORM

//avaliacao_corpo.php
	class avaliacao_corpo {
		private $id_habilidade;
		private $nota;
		
		public function getId_habilidade() {
			return $this->id_habilidade;
		}
		
		public function setId_habilidade($id_habilidade) {
			$this->id_habilidade = $id_habilidade;
		}

		public function getNota() {
			return $this->nota;
		}
		
		public function setNota($nota) {
			$this->nota= $nota;
		}
	}
?>