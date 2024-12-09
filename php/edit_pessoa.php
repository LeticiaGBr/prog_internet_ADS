<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Usuário</title>
</head>
<body>

<?php

include_once("database.php");
include_once("pessoa_da.php");
if (isset($_GET["pessoa_id"])){
$id= &$_GET["pessoa_id"];
$pessoa = getUsuario($id); 
}else{
    die("nao achei");
}
?>

<fieldset>
    <form action="pessoa_controler.php" method= "post">
    <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value ="<?php echo $pessoa ["nome"]?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value ="<?php echo $pessoa ["email"]?>">
        <input type="text"  name= "acao" value="Editar" hidden>
        <input type ="submit" value= "salvar alterações">

</form>
</fieldset>

</body>
</html>