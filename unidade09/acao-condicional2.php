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
        

        switch($_dia){


            case "segunda" :
                echo "hoje é seguna";
                break;

                case "tersa":
                    echo "hoje é tersa";
                    break;


                case "quarta":
                    echo "hoje é quarta";
                    break;


                case "quinta":
                    echo "hoje é quinta";
                    break;



                case "sexta":
                    echo "hoje é sexta";
                    break;



                case "sabado":
                    echo "hoje é sabado";
                    break;

                    default :
                    echo "hoje é domingo";
                    break;
        }

        ?>
    </body>
</html>