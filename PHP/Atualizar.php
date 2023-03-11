<?php

    $json = file_get_contents("data.json");
    $data = json_decode($json);

    require_once('Conexao.php');

    


    class Atualizar{
        public function AtualizarPergunta(Conexao $conexao, int $idFlashcard, string $novoDado){

            try{

                $conn = $conexao->conectar();
                $sql = "update flashcard set pergunta = '$novoDado' where idFlashcard = '$idFlahscard'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);

                if($result){
                    echo "<br><br>Atualizado com Sucesso";
                    return;
                }//Fim if
                echo "<br><br>Ops, houve uma falha, tente novamente! :(";

            }catch(Except $erro){
                echo $erro;
            }//Fim try catch

        }//Fim da função


        public function AtualizarResposta(Conexao $conexao, int $idFlahscard, string $novoDado){

            try{

                $conn = $conexao->conectar();
                $sql = "update flashcard set resposta = '$novoDado' where idFlashcard = '$idFlashcard'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);

                if($result){
                    echo "<br><br>Atualizado com Sucesso";
                    return;
                }//Fim if
                echo "<br><br>Ops, houve uma falha, tente novamente! :(";

            }catch(Except $erro){
                echo $erro;
            }//Fim try catch

        }//Fim da função
        
    
    
    
    }//Fim da classe



?>