<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>datesetheures</title>
        </head>
        <body>

            <?php

                echo time();

            ?>

        <br><br>

            <?php

                echo "Nous sommes le " . date("d/m/Y");

            ?>  

        <br><br>

            <?php

                echo date("H:i:s");

            ?>
            
            <?php

                 // On déclare une instance de l'objet PHP 'DateTime' :

             $oDate = new DateTime();
        
            ?>

        <br><br>

            <?php

                var_dump($oDate);

                $oDate = new DateTime("01-01-2018");

            ?>

        <br><br>

            <?php

                  // $macolonne_sql est issue d'une requête SQL; avec pour valeur 2018-11-16 11:26:51 (parexemple)
        
                $macolonne_sql = "2018-11-16 11:26:51";
                $oDate = new DateTime($macolonne_sql);
                   echo $oDate->format("d/m/Y H:i");

            ?>

        <br><br>

            <?php

                $datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
                $date = "2015-12-06";

                if (preg_match($datePattern, $date))
                {
                    echo "Date ".$date." valide.<br>";
                }
                else
                {
                    echo "Date ".$date." erronée.<br>";
                }

            ?>

        <br><br>

            <?php

                $oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "17/25/1966 03:42:11");

                $errors = DateTime::getLastErrors();

                if ($errors["error_count"]>0 || $errors["warning_count"]>0) 
                {
                    echo "ARGHHHH !";
                }

            ?>








        </body>
    </html>