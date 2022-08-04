<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_salada = array("Laranja","limão","tomate",'mamão');
        for($c = 0 ; $c < count($_salada) ; $c ++){
            echo $_salada[$c] . '</br>';
        }
        ?>
<br>
<br>
<br>

<?php
    $fejoada = array("feijão",'carne',"sal",'outros temperos');

    foreach( $fejoada as $f){
        echo $f . '</br>';
    }
?>
</body>
</html>