<?php
$_megaSena = array(4,9,1,6,15,50,100);
sort($_megaSena);
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
           print_r ($_megaSena);
        ?>

        <br>

        <?php

echo max($_megaSena) . "</br>";
echo min($_megaSena);

        ?>
        </pre>
    </body>
</html>