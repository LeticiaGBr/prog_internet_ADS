<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15</title>
    <style>
        *{border-collapse: collapse;}
        div{min-height:100vh;display:flex;align-items:center;justify-content:center;}
        th{border: 1px solid black;}
        td{border: 1px solid black;}
        h1{}
    </style>
</head>
<body>
    
    <?php
    include_once("14database.php");
    include_once("14usuarioDAO.php");

    $listaPessoa = getUsuarios();
    if(!isset($listaPessoa)){
        echo "<h1>Lista Vazia</h1>";
    }
    ?>
    <div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        <?php
        if(isset($listaPessoa)){
        for($i=0; $i <count($listaPessoa); $i++){
            ?>
            <tr>
                <td><?php echo $listaPessoa[$i]["idusuario"] ?></td>
                <td><?php echo $listaPessoa[$i]["nome"] ?></td>
                <td><?php echo $listaPessoa[$i]["email"] ?></td>
                <td><?php echo $listaPessoa[$i]["telefone"] ?></td>
            </tr>
            <?php
        }
    }
        ?>
    </table>
    </div>

</body>
</html>