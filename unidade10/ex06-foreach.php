<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php           
    $_agenda = array(
        "nome" => "Tarcisio",
        "Teleone" => "(74) 999 999999",
        "salario" => 50000
    );         
foreach($_agenda as $contato => $tot){
    echo $contato .':  ' . $tot . "</br>";
}


    ?>
</body>
</html>