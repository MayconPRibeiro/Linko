<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: *');

    require_once("Conectar.php");

    use DAO\conectar;

    $json = file_get_contents("php://input");
    $obj = json_decode($json);

    $nome = $obj['nome'];
    $senha = $obj['senha'];
    $usuario = $obj['usuario'];


            $conn = $conexao->conectar();
            $sql = "insert into alunos (idAluno, usuario, nome, senha) values ('' ,'$usuario','$nome','$senha')";
            $result = mysqli_query($conn,$sql);

            if($result){
                echo json_encode("<br>Cadastrado(a) com sucesso!");
                return;
            }else{
                 echo json_encode("<br>Ops...Deu errado, tente novamente! :(");
                 return;
            }//Fim if else

            mysqli_close($conn);
   


 

?>