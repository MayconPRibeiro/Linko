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

        try{


            $conn = $conexao->Conectar();
            $sql = "select * from alunos where usuario = '$usuario' and senha = '$senha'";
            $result = mysqli_query($conn, $sql);
            $verificar = mysqli_num_rows($result);

            if($verificar == 0){
                echo json_encode("Ops...Não encontrei, tente novamente");
                return;
            }else{
                
                header("location: PerfilAluno.php");
                exit();
                
            }

        }catch(Except $erro){

            echo $erro;

        }//Fim try catch


?>