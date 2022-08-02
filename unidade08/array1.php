
<?php 
$_salada = array("banana", "laranja", 'abacaxi');

?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo $_salada[0] . "</br>";
            echo $_salada[1] . "</br>";
            echo $_salada[2] . "</br>"
            . "</br>" . "</br>";
            echo $_salada[] = "Morango" . '</br>';
            echo $_salada[3] . "</br>";
            echo count($_salada) . "</br>";
            ?>
            
            <pre>
<?php

echo print_r($_salada)
?>
</pre>



            
    </body>
</html>