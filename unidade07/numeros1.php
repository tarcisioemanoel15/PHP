<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
              //  echo `${$salario * $meses}`;
                echo "Multiplicacao: " . $salario * $meses . "</br>";
                echo "divisao: " . $salario / 2 . "</br>";

            // Exponencial
            echo "Exponencial: " . pow(6,2) . "</br>";

            // Raiz Quadrada
            echo "Raiz quadrada: " . sqrt(63) . "</br>";
            
            // Randômico Generica
           echo "Randomico: " . rand(1,5) . "</br>";

            // Randômico entre um intervalo
           echo "Randomico no intervalo: " . rand(10,20) . "</br>";
            
            // Valor absoluto
            echo "Valor absoluto: " . abs(-500). "</br>"
        ?>
    </body>
</html>