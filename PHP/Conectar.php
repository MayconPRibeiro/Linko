<?php

namespace Conexao;

use DAO\conectar;


class Conexao{
    
    public function conectar(){
        try{
            $conn = mysqli_connect('localhost', 'root' , '' ,'teste');
            if($conn){
                
                echo "entrei";
                return $conn;
                
            }//fim do if
            echo "<br>Não Entrei!";

        }//fim do try
        catch(Except $erro)
        {
            echo $erro;
        }//fim do catch
    }//fim do conectar

}//fim da classe

?>
