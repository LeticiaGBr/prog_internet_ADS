<?php

include_once("database.php");
include_once("pessoa_da.php");

if (isset ($_POST["nome"]) && isset($_POST["email"])){
    $nome= $_POST["nome"];
    $email= $_POST["email"];
    insere_usuario($nome, $email);
}else{ echo "erro";
}

?>