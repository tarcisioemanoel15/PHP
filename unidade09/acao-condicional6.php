<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        
        
<?php 
$_dia = "segunda";
if($_dia == "Sabado" || $_dia == "domingo"){
    echo "Pode descansar";
}else{
    echo "vamos Trabalhar";
}
?>

<br>

<?php

$idade = 18;
$sexo  = "feminino";

if($idade >= 18 && $sexo == "feminino"){
    echo "Pode entrar";
}else{
    echo "entrada proibida";
}
?>

    </body>
</html>