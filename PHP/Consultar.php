<?php



    require_once("Conexao.php");


    class Consultar{

        

        public function ConsultarNascimento(Conexao $conexao, string $nomeDaTabela, string $cpf){

            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                while ($dados = mysqli_fetch_Array($result)){

                    $novaData = $dados['dataDeNascimento'];
                    $ano = substr($novaData, 0, 4);
                    $mes = substr($novaData, 5, 2);
                    $dia = substr($novaData, 8, 2);
                    $dataCorrigida = $dia."/".$mes."/".$ano;

                    if($dados['cpf'] == $cpf){

                        echo $dataCorrigida;

                    }//Fim if

                }//Fim while
            }catch(Except $erro){
                echo $erro;
            }//Fim try catch
        }//Fim function  
        
        
        public function ConsultarFlashcard(Conexao $conexao, string $usuario){

            try{
                $conn = $conexao->Conectar();
                $sql = "select * from flashcard where usuario = '$usuario'";
                $result = mysqli_query($conn, $sql);

                while ($dados = mysqli_fetch_Array($result)){

                    $idFlashcard = $dados['idFlashcard'];
                    $pergunta = $dados['pergunta'];
                    $resposta = $dados['resposta'];

                    return "id Flashcard: ".$idFlashcard;
                    
                }//Fim while
                return "Não encontrado!";
            }catch(Except $erro){
                echo $erro;
            }//Fim try catch

        }//Fim function 


        public function logar(Conexao $conexao, string $usuario, string $senha){

            try{
                $conn = $conexao->Conectar();
                $sql = "select * from alunos where usuario = '$usuario' and senha = '$senha'";
                $result = mysqli_query($conn, $sql);
                $verificar = mysqli_num_rows($result);

                if($verificar == 0){
                    echo "Ops...Não encontrei, tente novamente";
                    return;
                }else{
                    
                    header("location: PerfilPrestador.php");
                    exit();
                    
                }

            }catch(Except $erro){

                echo $erro;

            }//Fim try catch

        }//Fim function logar



        }//Fim function logarCliente








    }//Fim da classe





?>