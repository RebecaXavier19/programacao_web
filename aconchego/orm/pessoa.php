<?php
  class pessoa {
 private $id_pessoa;
 private $nome;
 private $genero;
 private $email;
 private $senha;
 private $id_nivel_condutor;
 private $id_nivel_conduzido;

 public function getId_nivel_condutor(){
  return $this->id_nivel_condutor;
}
public function setId_nivel_condutor($id_nivel_condutor){
  $this-> id_nivel_condutor = $id_nivel_condutor;
}
 public function getId_nivel_conduzido(){
  return $this->id_nivel_conduzido;
}
public function setId_nivel_conduzido($id_nivel_conduzido){
  $this-> id_nivel_conduzido = $id_nivel_conduzido;
}
  public function getId_pessoa(){
    return $this->id_pessoa;
  }
  public function setId_pessoa($id_pessoa){
    $this-> id_pessoa = $id_pessoa;
  }
  public function getNome(){
    return $this->nome;
  }
  public  function setNome($nome){
    $this->nome = $nome;
  }
  public function getGenero(){
    return $this->genero;
  }
  public function setGenero($genero){
    $this->genero= $genero;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getSenha(){
    return $this->senha;
  }
  public function setSenha($senha){
    $this->senha = $senha;
  }
  
  }
  
?>