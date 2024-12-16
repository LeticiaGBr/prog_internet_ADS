<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php?erro=1");
    exit(); 
}



if (isset($_GET["text"])){
    $_SESSION["txt"]=$_GET["txt"];
}

echo $_SESSION["login"];
echo $_SESSION["txt"];

?>

<h2>Menu</h2>

<a href="sair.php"><p>Sair</p></a>
