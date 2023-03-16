<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: *');

    require_once("Conectar.php");

    use DAO\conectar;

    $json = file_get_contents("php://input");
    $obj = json_decode($json, true);


    $nomeDeck = $obj['nomeDeck'];
    $idAluno = $obj['idAluno'];


    $conn = $conexao->conectar();
    $sql = "insert into deck (idDeck, nomeDeck, idAluno) values ('', '$nomeDeck', $idAluno)";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo json_encode("<br>Deck Adicionado!");
        return;
    }else{
        echo json_encode("<br>Ops...houve um erro, tente novamente! :(");
        return;
    }//Fim if else

    mysqli_close($conn);






?>