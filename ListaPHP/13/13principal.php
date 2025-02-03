<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13-Principal</title>
</head>
<body>
    <?php
        session_start();
        if ($_POST["usuario"] == "admin" || $_POST["senha"] == "1234") {
            echo "Parabén! Você esta logado no sistema <br>";
            echo "<a href='13sair.php'><button>deslogar</button></a>";
        }else{
            echo "Você não esta logado no sistema :(";
        }
    ?>

</body>
</html>