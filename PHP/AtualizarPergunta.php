<?php
    
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: *');

    require_once("Conectar.php");

    use DAO\conectar;
    
    $json = file_get_contents("php://input");
    $obj = json_decode($json);

    $novoDado = $obj->novoDado;
    $idFlahscard = $obj->idFlashcard;
    


            try{

                $conn = $conexao->conectar();
                $sql = "update flashcard set pergunta = '$novoDado' where idFlashcard = '$idFlahscard'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);

                if($result){
                    echo json_encode("<br><br>Atualizado com Sucesso");
                    return;
                }//Fim if
                echo json_encode("<br><br>Ops, houve uma falha, tente novamente! :(");

            }catch(Except $erro){
                echo $erro;
            }//Fim try catch
    



?>