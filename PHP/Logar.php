<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: *');

    require_once("Conectar.php");

    use DAO\conectar;

    $json = file_get_contents("php://input");
    $obj = json_decode($json);


    $usuario = $obj->usuario;
    $senha = $obj->senha;


            $conn = $conexao->Conectar();
            $sql = "select * from alunos where usuario = '$usuario' and senha = '$senha'";
            $result = mysqli_query($conn, $sql);
            $verificar = mysqli_num_rows($result);

            if($verificar == 0){
                echo json_encode("Ops...Não encontrei, tente novamente");
                return;
            }else{

                $idSql = "select idAluno from alunos where usuario = '$usuario' and senha = '$senha'";
                $result = mysqli_query($conn, $idSql);  
                setcookie('codAluno', $result);

                header("location: Decks.js");
                exit();
                
            }//Fim if else




?>