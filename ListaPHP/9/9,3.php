<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9-3</title>
</head>
<body>
    <?php
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $peso = $_REQUEST["peso"];
    $altura = $_REQUEST["altura"];
    $imc =floatval($peso) / (floatval($altura)*floatval($altura));
    $imc = number_format($imc,2);
    ?>

    <h1>nome: <?php echo $nome; ?></h1>
    <h1>email: <?php echo $email; ?></h1>
    <h1>IMC: <?php echo $imc; ?></h1>
    <h1>Peso: <?php echo $peso; ?></h1>
    <h1>Altura: <?php echo $altura; ?></h1>
</body>
</html>