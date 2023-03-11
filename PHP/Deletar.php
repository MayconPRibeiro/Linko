<?php

    namespace siteDomestica\PHP\domestica;  

    require_once("Conexao.php");

    use siteDomestica\PHP\domestica\Conexao;


    class Deletar{
        public function excluir(Conexao $conexao, string $nomeTabela, string $cpf){
            try{

                $conn = $conexao->conectar();
                $sql = "delete from $nomeTabela where cpf = '$cpf'";
                $result = mysqli_query($conn,$sql);

                mysqli_close($conn);

                if($result){
                    echo "<br><br>Deletado com sucesso! :)";
                    return;

                }//Fim if
                echo "Ops...Houve uma falha, tente novamente! :(";
            }catch(Except $erro){
                echo $erro;//Fim try catch
            }

        }//Fim da função deletar



    }//Fim da classe





?>