<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10</title>
</head>
<body>
    <form action="" method="get">
        <label for="num">Insira um número: </label>
        <input type="text" name="num" id="num">
        <label for="num2">Insira mais um número: </label>
        <input type="text" name="num2" id="num2">
        <input type="submit" value="OK">
    </form>
    

    <?php
    $num1 = $_REQUEST["num"];
    $num2 = $_REQUEST["num2"];

    for($i=$num1; $i <= $num2;$i++){
        echo "<span class='$i' > $i</span> <br>";
    }
    ?>
</body>
</html>