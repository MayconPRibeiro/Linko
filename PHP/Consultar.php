<?php

    require_once("Conexao.php");

    $json = file_get_contents("data.json");
    $data = json_decode($json);

    //$objetoJson = '{"nome":"Joao","usuario":"doidao","senha":"123"}';
    //$obj = json_decode($objetoJson);
    $usuario = $data->usuario; // Acessando os valores do objeto nome




    class Consultar{ 
        
        
        public function ConsultarFlashcard(Conexao $conexao, string $usuario){

            try{
                $conn = $conexao->Conectar();
                $sql = "select * from flashcard where usuario = '$usuario'";
                $result = mysqli_query($conn, $sql);

                while ($dados = mysqli_fetch_Array($result)){

                    $idFlashcard = $dados['idFlashcard'];
                    $pergunta = $dados['pergunta'];
                    $resposta = $dados['resposta'];

                    $jsonFlash = array "idFlashcard"=>"$idFlashcard", "pergunta"=>"$pergunta", "resposta"=>"$resposta";
                    return json_encode($jsonFlash);
                    
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
                    
                    header("location: PerfilAluno.php");
                    exit();
                    
                }

            }catch(Except $erro){

                echo $erro;

            }//Fim try catch

        }//Fim function logar









    }//Fim da classe





?>