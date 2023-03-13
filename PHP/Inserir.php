<?php
    require_once("Conexao.php");

    $json = file_get_contents("data.json");
    $data = json_decode($json);

    //foreach ($data as $key => $value){        $value->nome;        $value->usuario;        $value->senha;    }//Fim foreach


    //OU
    //$myObj = new stdClass();    $myObj->name = "John";    $myObj->age = 30;    $myObj->city = "New York";    $myJSON = json_encode($myObj);


    //OU
    $objetoJson = '{"nome":"Joao","usuario":"doidao","senha":"123"}';
    $obj = json_decode($objetoJson);
    $nome = $obj->nome; // Acessando os valores do objeto nome
    $senha = $obj->senha;
    $usuario = $obj->usuario;
    
    Class Inserir{

        public function inserirAluno(
            Conexao $conexao,
            string $nome, 
            string $usuario, 
            string $senha 
            ){

                try{                    

                    $conn = $conexao->conectar();
                    $sql = "insert into alunos (usuario, nome, senha) values ('$usuario','$nome','$senha')";
                    $result = mysqli_query($conn,$sql);

                    if($result){
                        echo "<br><br>Cadastrado(a) com sucesso!";
                        return;
                    }else{
                        return "<br><br>Ops, Aconteceu um erro, tente novamente! :(";
                    }//Fim if else

                    mysqli_close($conn);

                }catch(Except $erro){

                    echo $erro;

                }//Fim try catch       
        
        }//Fim da function InserirAluno

        public function inserirFlashcard(
            Conexao $conexao,
            string $pergunta,
            string $resposta
        ){

            try{
                $conn = $conexao->conectar();
                $sql = "insert into flashcard (idFlashcard, pergunta, resposta) values ('', '$pergunta', '$resposta')";
                $result = mysqli_query($conn,$sql);

                if($result){
                    echo "<br><br>Flashcard Adicionado!";
                    return;
                }else{
                    echo "<br><br>Ops, Aconteceu um erro, tente novamente! :(";
                    return;
                }//Fim if else

                mysqli_close($conn);

            }catch(Except $erro){
                echo $erro;
            }

        }//Fim do inserirFlashcard

    }//Fim da clasee Inserir

?>