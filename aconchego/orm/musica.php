<?php


  class musica {
 private $id_musica;
 private$nome;
 


  public function getId_musica(){
    return $this->id_musica;
  }
  public function setId_pessoa($id_musica){
    $this-> id_musica = $id_musica;
  }
  public function getNome(){
    return $this->nome;
  }
  public  function setNome($nome){
    $this->nome = $nome;
  }
  
 

  }
  ?>