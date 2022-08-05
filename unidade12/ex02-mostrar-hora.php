<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            date_default_timezone_set('US/Eastern');
            $_agora = getdate();


            $segundos  = $_agora['seconds'];
            $minutos   = $_agora['minutes'];
            $hora      = $_agora['hours'];

            $ano       = $_agora['mday'];
            $mes       = $_agora['mon'];
            $dia       = $_agora['year'];
            

            echo $hora . ': ' .  $minutos .  ': ' . $segundos .'</br>';
            echo $dia . '/ ' .  $mes .  '/ ' . $ano;


        ?>
    </body>
</html>