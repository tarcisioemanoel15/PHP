<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
                $_idade = 18;
                $maioridade = ($_idade >= 18) ? " de maior" : " de Menor";
                echo $maioridade;
        ?>
    </body>
</html>