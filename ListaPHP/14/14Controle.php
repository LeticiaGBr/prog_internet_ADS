<?php
    include_once("14database.php");
    include_once("14usuarioDAO.php");

    if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["telefone"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        save($nome,$email,$telefone);
        header("Location: 14.php?retorno=1");

    }else{
        header("location:14.php?retorno=0");
    }

?>