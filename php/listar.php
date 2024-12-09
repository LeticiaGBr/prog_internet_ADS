<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuário</title>
</head>
<body>
<pre>

<?php

include_once("database.php");
include_once("pessoa_da.php");
$lista_pessoa=getUsuarios();

?>
<table>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
</tr>

<?php 
 
 for ($i = 0; $i<count ($lista_pessoa); $i++){
?>
<tr> 

    <td><a href = "editar.php?pessoa_id=<?php echo $lista_pessoa["id"]?>">
    <?php echo $lista_pessoa["id"]?>
    </a>
    </td>
    <th><?php echo $lista_pessoa [$i]["nome"]?></th>
    <th><?php echo $lista_pessoa [$i]["email"]?></th>
        <?php
        
 }
 ?>
 </table>
<pre>
</body>
</html>