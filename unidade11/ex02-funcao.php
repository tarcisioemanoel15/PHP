<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function retornarDiaria($salario,$dia) {
            return number_format( $salario/$dia);
        }

        echo retornarDiaria(1900, 30).'</br>';
        echo retornarDiaria(5900, 15).'</br>';
        echo retornarDiaria(900, 10);

    ?>
</body>
</html>