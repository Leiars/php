<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>fonctions</title>
        </head>
        <body>

            <?php
                 
                 function lien($lien, $titre) 
                 
                 {
                    echo "<a href='https://www.reddit.com/'>Reddit Hug</a>";
                 }

                 lien("https://www.reddit.com/", "Reddit Hug");

            ?>
<br><br>
            <?php

                $tab = array(4, 3, 8, 2);

                echo "<table border=>"; /*fait le tableau*/
                
                    foreach($tab as $val)
                    {
                echo "<td>$val</td>";
                    }
                    echo "<td> =".array_sum($tab)."</td>";

            ?>





























        </body>
    </html>