<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: *');

    require_once("Conectar.php");

    use DAO\conectar;

    $json = file_get_contents("php://input");
    $obj = json_decode($json);

    $idDeck = $obj->idDeck;




                $conn = $conexao->conectar();
                $sql = "delete from Deck where idDeck = '$idDeck'";
                $result = mysqli_query($conn,$sql);

                mysqli_close($conn);

                if($result){
                    echo json_encode("<br><br>Deck Deletado!");
                    return;

                }//Fim if
                    echo json_encode("OPS...Houve um erro, tente novamente! :(");
                    return;




?>