<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
use DAO\Conectar;
require_once("Conectar.php");

$conexaoDb = new Conectar();
$connect = $conexaoDb->conectarDb();

$json = file_get_contents('php://input');
$objeto = json_decode($json,true);

$nome = $objeto['nomePHP'];
$email = $objeto['emailPHP'];
$senha = $objeto['senhaPHP'];

$phpQuery = "INSERT INTO Usuario(IdUsuario,nome,email,senha) VALUES('','$nome','$email','$senha')";
$resultado = mysqli_query($connect,$phpQuery);

if($resultado){
    echo json_encode("Inseriu!");
  }else{
    echo json_encode("Erro ao inserir");
  }  

mysqli_close($connect);



?>