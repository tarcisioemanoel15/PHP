<?php
    $salario  = 1095;
    $gasolina = 4.55;
    $telefone = '(74) 999 999999';
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
                echo "O $salario é um numero ? " .is_numeric($salario)   ."</br>";
                echo "O $gasolina é um numero ? " .is_numeric($gasolina) ."</br>";
                echo "O $telefone é um numero ? " .is_numeric($telefone) ."</br>"

                .'</br>';
            // testar se é inteiro
            echo "O $salario é um inteiro ? " .is_int($salario)   ."</br>";
            echo "O $gasolina é um inteiro ? " .is_int($gasolina) ."</br>";
            echo "O $telefone é um inteiro ? " .is_int($telefone) ."</br>".'</br>';


            // testar se é float

                echo "O $salario é um float ? " .is_float($salario)   ."</br>";
                echo "O $gasolina é um float ? " .is_float($gasolina) ."</br>";
                echo "O $telefone é um requirido ? " .is_float($telefone) ."</br>";
        ?>
        
        
    </body>
</html>