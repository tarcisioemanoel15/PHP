<?php
$_data1  =  new DateTime('2021-01-03');
$_data2  =  new DateTime('2022-02-05');
$_intervalo = $_data1->diff($_data2);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
            <?php
                print_r($_intervalo);
            ?>
        </pre>


        <br>
        <br>

        <pre>
            <?php
                print_r($_intervalo->format('%r %y %m %d %a'));
            ?>
        </pre>
    </body>
</html>