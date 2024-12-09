<?php

include_once("database.php");
include_once("pessoa_da.php");

if (isset($_POST["acao"]) && $_POST["acao"] == "cadastrar") {
    if (isset($_POST["nome"]) && isset($_POST["email"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        insere_usuario($nome, $email);
        header("Location: listar.php");
        exit();
    } else {
        echo "Erro: Nome e e-mail são obrigatórios!";
    }
}

if (isset ($_POST["acao"]) && $_POST ["acao"] == "editar"){



}


?>