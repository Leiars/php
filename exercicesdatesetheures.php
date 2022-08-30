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

                  // Trouvez le numéro de semaine de la date suivante : 14/07/2019

                $Date = '2019-07-14';
                
                  echo 'Semaine' . date('W',strtotime($Date));

            ?>

        <br><br>

            <?php

                  // Combien reste-t-il de jours avant la fin de votre formation ?
                  
                $dateActuel = date ("d-m-Y");

                    echo "\n";

                $dateFormation = date("31-08-2022");
                $diff  = abs(strtotime($dateActuel) - strtotime($dateFormation));

                   // Pour obtenir l’année, "365 jours * 60 minutes * 60 secondes * 24 heures, puis diviser par la différence ($diff)".
                $Years  = floor($diff / (365 * 60 * 60 * 24)); 

                  // Pour obtenir les mois "Soustraire(-) la différence($diff) avec l'année($Years) puis 30 jours * 60 minutes * 60 secondes * 24 heures, puis / 365 jours * 60 minutes * 60 secondes * 24 heures".
                $months = floor(($diff - $Years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24)); 

                  // Pour obtenir les jours "60 minutes * 60 secondes * 24 heures puis / 365 jours * 60 minutes * 60 secondes * 24 heures puis / 30 jours * 60 minutes * 60 secondes * 24 heures".
                $days   = floor(($diff - $Years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24)); 

                    echo $Years." Années, ".$months. " Mois et ".$days." Jours";

            ?>

        <br><br>

            <?php

                  // Exercices perso "Donne le nombre de jours acquis depuis le début de la formation".

                date_default_timezone_set('Europe/Paris');
                
                function temps_ecoule($day, $month, $year)

                {
                $difference_timestamp = time() - mktime(0, 0, 0, $month, $day, $year);
                $mois = array(1 => 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
                    
                $nb_jour = floor($difference_timestamp / (3600*24));
                $nb_heure = floor(($difference_timestamp % (3600*24)) / 3600);
                $nb_minute = floor(($difference_timestamp % (3600*24)) % 3600 / 60);
                $nb_seconde = floor(($difference_timestamp % (3600*24)) % 3600 % 60);
                    
                    return 'Depuis le début de la formation (TB) le '.$day.' '.$mois[$month].' '.$year.',  il s\'est écoulé '.$nb_jour.' jour(s) '.$nb_heure.' heure(s) '.$nb_minute.' minute(s) '.$nb_seconde.' seconde(s).';
                }
                
                    echo temps_ecoule(16,05,2022);

            ?>

        <br><br>

            <?php

                  // Exercices perso "Donne le nombre de jours restant avant la fin de l'année".

                function time_elapsed($month, $day)
                {
                $now = new DateTime();
                $day = new DateTime("$month/$day");
                
                    if ($day > $now)
                    {
                        $day->modify('-1 year');
                    }
                
                    return 'Avant la fin de l\'année, il reste, ' .$now->diff($day)->format('%a jour(s), %h heure(s), %i minute(s) et %s seconde(s).');
                }
                
                    echo time_elapsed(1, 1); 

            ?>


        <br><br>

            <?php

                  // Année bissextile ; false or true

                $year = 2000;

                $isLeap = DateTime::createFromFormat('Y', $year)->format('L') === "1";

                    var_dump($isLeap); // Bool(true)

            ?>
        
        <br>

            <?php
          
                  // Montrer que la date du 32/17/2019 est erronée

                $date =  DateTime::createFromFormat("d/m/y", "32/17/2019");  

                    echo "date erronée.";
                
            ?>

        <br><br>

            <?php

                  // Affiche l'heure demandé

                $heure =('');
                $minute =('');

                    echo "11h25";

            ?>

        <br><br>

            <?php
                    
                  // Affiche l'heure en tps réel

                $heure = date('h');
                $minute = date('i');

                    echo $heure. "h" .$minute;

            ?>

        <br><br>

            <?php
                  // Ajouter 1 mois à la date courante

                $mois = "2022-08-29";

                     echo date('Y-M-d', strtotime($mois. '+ 1 month'));

            ?>

        <br><br>

            <?php

                  // Que s'est-il passé le 1000200000 ?

                $timestamp = 1000200000;
                $format = 'Y-M-d à H:i ; ' ;
                
                     echo date($format, $timestamp).' Attentat du 11 Septembre.';

            ?>

         </body>
     </html>


            