<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
</head>
<body>
    <fieldset>
        <legend>Login</legend>
        
        <?php
        if (isset($_GET["erro"]) && $_GET["erro"] == 1) {
            echo '<h2>Usuário não logado</h2>';
        }
        if (isset($_GET["erro"]) && $_GET["erro"] == 2) {
            echo '<h2>problema</h2>';
        }
        ?>

        <form action="autenticacao.php" method="POST">
            <label for="login">Login</label>
            <input type="text" id="login" name="login" required>
            
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>
            
            <input type="submit" value="Entrar">
        </form>
    </fieldset>
</body>
</html>
