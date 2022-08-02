<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna primeira ocorrencia
            echo strlen($_nome)
            // espaso
            . "</br>";
            // stripos  - Retorna primeira ocorrência 
            echo stripos($_nome, "C")
            

            // strripos - Retorna última ocorrência
           . "</br>";
            echo strripos($_nome, "P")
                        
            
            // strtolower - converte para letras min.
            . "</br>";
            echo strtolower($_nome)

            // strtoupper - converte para letras min.
            . "</br>";
            echo strtoupper($_nome)

            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            
            . "</br>";
            echo SUBSTR_COUNT($_nome, "P")
        ?>
        
        
    </body>
</html>