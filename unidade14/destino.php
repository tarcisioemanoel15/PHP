<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 

    <pre>
        <?php
            print_r ($_POST);
        ?>
    </pre>

    <pre>
        <?php

$_nome = isset($_POST["nome"]) ? $_POST["nome"] : "não definido"; 
$_email = isset($_POST["email"]) ? $_POST["email"] : "não definido"; 

        // if(isset($_POST["nome"])){
        //     $_nome = $_POST["nome"];
        // }else{
        //     echo "nome não definido";        
        // }

        // if(isset($_POST["email"])){
        //     $_email = $_POST["email"];
        // }else{
        //     echo " e_mail não definido";        
        // }

        echo "NOME " . $_nome  . '</br> '; 
        echo "EMAIL " . $_email . '</br> ';
        
            ?>
    </pre>

    </body>
</html>