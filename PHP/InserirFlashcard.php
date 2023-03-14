<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: *');

    require_once("Conectar.php");

    use DAO\conectar;

    $json = file_get_contents("php://input");
    $obj = json_decode($json);

    
    $pergunta = $obj['pergunta'];
    $resposta = $obj['resposta'];


    try{

        $conn = $conexao->conectar();
        $sql = "insert into flashcard (idFlashcard, pergunta, resposta) values ('', '$pergunta', '$resposta')";
        $result = mysqli_query($conn,$sql);

        if($result){
            echo json_encode("<br><br>Flashcard Adicionado!");
            return;
        }else{
            echo json_encode("<br><br>Ops, Aconteceu um erro, tente novamente! :(");
            return;
        }//Fim if else

        mysqli_close($conn);

    }catch(Except $erro){
        echo $erro;
    }//Fim try catch

?>