<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
        display: flex;
        flex-direction:column;
        width:200px;
        margin:0 auto;
        }
    </style>
</head>

<body>

    <form action="pessoa_controler.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Adicionar">
    </form>

</body>
</html>
