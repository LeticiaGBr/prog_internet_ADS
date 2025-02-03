<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12</title>
</head>
<body>
    <?php
    function calcularArray(array $array){
        $soma=0;
        for($i=0;$i< count($array);$i++){
            $soma += $array[$i];
        }
        echo "soma " . $soma;
        echo "<br>maior " . max($array);
        echo "<br>menor " . min($array);
    }
   calcularArray(array(1,10,5,-7));
    ?>
</body>
</html>