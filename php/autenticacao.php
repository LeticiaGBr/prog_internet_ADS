<?php

session_start();

if (!isset($_POST["login"]) || !isset($_POST["senha"])) {
    header("Location: login.php");
    exit();
}

if ($_POST["login"] !== "admin" || $_POST["senha"] !== "123mudar") {
    header("Location: login.php?erro=2");
    exit();
}

$_SESSION["login"] = "login";

header("Location: main.php");
exit();

?>
