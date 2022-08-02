<?php
$_nome      = "Tarcisio";
$_telefone  ='(99) 999 999999';
$_fumante   = NULL;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php echo isset($_nome) ?> <br>
        <?php echo isset($_telefone) ?> <br>
        <?php echo isset($_fumante) ?>
    </body>
</html>