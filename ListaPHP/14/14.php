<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14</title>
    <style>
        div{min-width: 100vw; min-height: 100vh; display: flex; justify-content: center; align-items: center;}
        fieldset{display:inline;}
        form{display: flex; justify-content: center; align-items: center; flex-direction:column;}
    </style>
</head>
<body>
    <?php
    if(isset($_GET["retorno"])){
        if($_GET["retorno"] == 1){
            echo "<script> alert('Usuário cadastrado com sucesso');</script>";
        } else{
            echo "<script> alert('Erro ao cadastrar o usuário');</script>";
        }
    }
    ?>
    <div>
    <fieldset>
        <h1>Cadastro de Usuários</h1>
    <form action="14controle.php" method="post">
        <label for="nome">Insira seu nome: </label>
        <input type="text" name="nome" id="nome"> <br>
        <label for="email">Insira seu email: </label>
        <input type="email" name="email" id="email"> <br>
        <label for="telefone">Insira seu telefone: </label>
        <input type="text" name="telefone" id="telefone"> <br>
        <input type="submit" value="OK">
    </form> 
    </fieldset>
    </div>
</body>
</html>