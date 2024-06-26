<?php


  class nivel {
 private $id_nivel;
 private$nome;
 


  public function getId_exame(){
    return $this->id_nivel;
  }
  public function setId_pessoa($id_nivel){
    $this-> id_nivel= $id_nivel;
  }
  public function getNome(){
    return $this->nome;
  }
  public  function setNome($nome){
    $this->nome = $nome;
  }
 

  }
  ?>