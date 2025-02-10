<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }
        th {
            background-color: white;
        }
        td {
            height: 50px;
        }
        .btn-container {
            margin: 20px 0;
            text-align: right;
        }
        .btn-cadastrar {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-cadastrar:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>

<?php
    include_once("Database.php");
    include_once("PessoaDAO.php");

    $listaPessoa = getUsuarios();
?>

    <h2>Lista de Usuários</h2>

    <div class="btn-container">
        <a href="Cadastrar.php" class="btn-cadastrar">Cadastrar</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Usuário</th>
            <th>Senha</th> 
        </tr>
        <?php
        foreach ($listaPessoa as $pessoa) {
        ?>
            <tr>
                <td>
                    <a href="editPessoa.php?pessoa_id=<?php echo $pessoa['id']; ?>">
                        <?php echo $pessoa['id']; ?>
                    </a>
                </td>
                <td><?php echo $pessoa['nome']; ?></td>
                <td><?php echo $pessoa['email']; ?></td>
                <td><?php echo $pessoa['usuario']; ?></td>
                <td><?php echo $pessoa['senha']; ?></td> 
            </tr>
        <?php
        }
        ?>
    </table>

</body>
</html>
