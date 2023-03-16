<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: *');

    require_once("Conectar.php");

    use DAO\conectar;

    $json = file_get_contents("php://input");
    $obj = json_decode($json);

    //$objetoJson = '{"nome":"Joao","usuario":"doidao","senha":"123"}';
    //$obj = json_decode($objetoJson);

    $idDeck = $obj->idDeck; 


                $conn = $conexao->Conectar();
                $sql = "select * from deck where idAluno = '$idAluno'";
                $result = mysqli_query($conn, $sql);

                while ($dados = mysqli_fetch_Array($result)){

                    $idDeck = $dados['idDeck'];
                    $nomeDeck = $dados['nomeDeck'];
                    


                    $jsonFlash = array "idDeck"=>"$idDeck", "nomeDeck"=>"$nomeDeck";
                    return json_encode($jsonFlash);
                    
                }//Fim while
                    return json_encode("Não encontrado!");


?>