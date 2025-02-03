<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9-2</title>
</head>
<body>

    <?php
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    ?>
    <form action="9,3.php" method="post">
        <label for="peso">Insira seu peso: </label>
        <input type="number" name="peso" id="peso" step="any">
        <label for="altura">Insira sua altura: </label>
        <input type="number" name="altura" id="altura" step="any">
        <input type="text" name="nome" id="nome" value = <?php echo $nome?> hidden>
        <input type="email" name="email" id="email" value = <?php echo $email?> hidden>
        <input type="submit" value="OK">
    </form>
</body>
</html>