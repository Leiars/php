<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>exercicesdatesetheures</title>
        </head>
        <body>

            <?php

                $Date = '2019-07-14';
                echo 'Semaine' . date('W',strtotime($Date)) . ' de ' . date('Y',strtotime($Date));

            ?>

        <br><br>

 
            <?php

                $dateActuel = date ("d-m-Y");
                echo "\n";
                $dateFormation = date("31-08-2022");
                $diff  = abs(strtotime($dateActuel) - strtotime($dateFormation));

                $Years  = floor($diff / (365 * 60 * 60 * 24));// Pour obtenir l’année, 365 jours * 60 minutes * 60 secondes * 24 heures, puis diviser par la différence ($diff). //
                $months = floor(($diff - $Years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));// Pour obtenir les mois on soustrait(-) la différence($diff) avec l'année($Years) puis 30 jours * 60 minutes * 60 secondes * 24 heures, puis / 365 jours * 60 minutes * 60 secondes * 24 heures. //
                $days   = floor(($diff - $Years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24)); // Pour obtenir les jours, 60 minutes * 60 secondes * 24 heures puis / 365 jours * 60 minutes * 60 secondes * 24 heures puis / 30 jours * 60 minutes * 60 secondes * 24 heures. //

                echo $Years." Années, ".$months. " Mois et ".$days." Jours";

            ?>

        <br><br>

            <?php

                $year = 2004;
                $isLeap = DateTime::createFromFormat('Y', $year)->format('L') === "1";
                var_dump($isLeap); //bool(true)

            ?>
