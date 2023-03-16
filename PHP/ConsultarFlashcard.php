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

    $usuario = $obj->usuario; 
    $idDeck = $_COOKIE['idDeck'];


                $conn = $conexao->Conectar();
                $sql = "select * from flashcard where idDeck = '$idDeck'";
                $result = mysqli_query($conn, $sql);

                while ($dados = mysqli_fetch_Array($result)){

                    $idFlashcard = $dados['idFlashcard'];
                    $pergunta = $dados['pergunta'];
                    $resposta = $dados['resposta'];

                    $jsonFlash = array "idFlashcard"=>"$idFlashcard", "pergunta"=>"$pergunta", "resposta"=>"$resposta";
                    return json_encode($jsonFlash);
                    
                }//Fim while
                    return json_encode("Não encontrado!");


?>