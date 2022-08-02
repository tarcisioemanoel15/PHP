<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
        echo "este elemento eziste ?: " . in_array("Laranja", $_salada)."</br>";
        echo "este elemento eziste ?: " . in_array("uva", $_salada)."</br>";
        echo "este elemento eziste ?: " . in_array("Abacate", $_salada);

        ?>
    </body>
</html>