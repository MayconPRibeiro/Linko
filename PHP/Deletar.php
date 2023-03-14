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




                $conn = $conexao->conectar();
                $sql = "delete from alunos where usuario = '$usuario'";
                $result = mysqli_query($conn,$sql);

                mysqli_close($conn);

                if($result){
                    echo json_encode("<br><br>Deletado com sucesso! :)");
                    return;

                }//Fim if
                    echo json_encode("Ops...Houve uma falha, tente novamente! :(");
                    return;



?>