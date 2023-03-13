<?php

    require_once("Conexao.php");    


    class Deletar{
        public function excluirAluno(Conexao $conexao, string $usuario){
            try{

                $conn = $conexao->conectar();
                $sql = "delete from alunos where usuario = '$usuario' and senha = '$senha'";
                $result = mysqli_query($conn,$sql);

                mysqli_close($conn);

                if($result){
                    echo "<br><br>Deletado com sucesso! :)";
                    return;

                }//Fim if
                echo "Ops...Houve uma falha, tente novamente! :(";
            }catch(Except $erro){
                echo $erro;
            }//Fim try catch

        }//Fim da função deletar


        public function excluirFlashcard(Conexao $conexao, int $idFlashcard){
            try{

                $conn = $conexao->conectar();
                $sql = "delete from flashcard where idFlashcard = '$idFlashcard'";
                $result = mysqli_query($conn,$sql);

                mysqli_close($conn);

                if($result){
                    echo "<br><br>Flashcard Deletado!";
                    return;

                }//Fim if
                echo "OPS...Houve um erro, tente novamente! :(";
            }catch(Except $erro){

                echo $erro;

            }//Fim try catch


        }//Fim do excluirFlashcard



    }//Fim da classe





?>