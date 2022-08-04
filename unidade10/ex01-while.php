<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    
    
    <?php 
        $contador = 1;
            while($contador < 4){
                echo "Tarcisio" . '</br>';
                $contador = $contador + 1;
            }
    ?>
    <?php 
    
    $_C = 1;

    while($_C < 5){
        $orteio = rand(1,100);
        echo $orteio . '</br>';
        $_C = $_C + 1;
    }
    ?>




</body>
</html>