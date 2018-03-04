<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o loign e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");
//echo $usuario;

//$aluno = new Usuario(); 

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

//Criando um novo usuário
//$aluno = new Usuario("aluno2", "@lun0");
//$aluno->insert();
//echo $aluno;

//Alterando o cadastro de usuario
//$usuario = new Usuario();
//$usuario->loadbyId(10);
//$usuario->update("professor2", "!@#$%55");
//echo $usuario;

//Deletando usuario
$usuario = new Usuario();
$usuario->loadbyId(6);
$usuario->delete();

echo $usuario;

?>