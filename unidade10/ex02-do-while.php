<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php    

    $_contador = 1;

    do{
        $megasena = rand(1,60);
        echo $megasena . ' ';
        $_contador = $_contador + 1;
    }while($_contador < 5);


    
    ?>
</body>
</html>