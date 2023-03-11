<?php
    namespace siteDomestica\PHP\domestica;

    require_once('Conexao.php');

    use siteDomestica\PHP\domestica\Conexao;


    class Atualizar{
        public function AtualizarTelefone(Conexao $conexao, string $nomeTabela, string $cpf, string $novoDado){

            try{

                $conn = $conexao->conectar();
                $sql = "update $nomeTabela set telefone = '$novoDado' where cpf = '$cpf'";
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


        public function AtualizarRua(Conexao $conexao, string $nomeTabela, string $cpf, string $novoDado){

            try{

                $conn = $conexao->conectar();
                $sql = "update $nomeTabela set rua = '$novoDado' where cpf = '$cpf'";
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

        public function AtualizarNumero(Conexao $conexao, string $nomeTabela, string $cpf, string $novoDado){

            try{

                $conn = $conexao->conectar();
                $sql = "update $nomeTabela set numero = '$novoDado' where cpf = '$cpf'";
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

        public function AtualizarBairro(Conexao $conexao, string $nomeTabela, string $cpf, string $novoDado){

            try{

                $conn = $conexao->conectar();
                $sql = "update $nomeTabela set bairro = '$novoDado' where cpf = '$cpf'";
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
    

        public function AtualizarCidade(Conexao $conexao, string $nomeTabela, string $cpf, string $novoDado){

            try{

                $conn = $conexao->conectar();
                $sql = "update $nomeTabela set cidade = '$novoDado' where cpf = '$cpf'";
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