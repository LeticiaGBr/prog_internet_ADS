<?php 
    function conecta(){
        $user="root";
        $senha="aluno";
        $database="mydb";
        $host="localhost";      
        
        $db = new PDO("mysql:host=$host;dbname=$database",$user,$senha);
        if($db){
            return $db;
        }else{
            return false;
        }
    }

    function chekConexao($connId){
        if($connId){
            echo "Parabéns! Você está conectado com o banco de dados";
        }else{
            echo "Não foi possivel conectar com o banco de dados";
        }
    }
?>