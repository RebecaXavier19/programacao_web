<?php


  class exame {
 private $id_exame;
 private$nome;
 private $data;


  public function getId_exame(){
    return $this->id_exame;
  }
  public function setId_pessoa($id_exame){
    $this-> id_exame = $id_exame;
  }
  public function getNome(){
    return $this->nome;
  }
  public  function setNome($nome){
    $this->nome = $nome;
  }
  public function getData(){
    return $this->data;
  }
  public function setData($data){
    $this-> data= $data;
  }
 

  }
  ?>