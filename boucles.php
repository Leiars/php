<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>boucles</title>
        </head>
        <body>

            <?php

                $a = 1; 
                while ($a < 10) { 
                echo $a; 
                $a++; 
                } 
            ?>
                <br><br>
            <?php
                $a = 0; 
                do { 
                    echo $a; 
                } while ($a > 0); 
            ?>
                <br><br>
            <?php
                $a = 0; 
                do { 
                    if ($a < 5) { 
                        echo "a inférieur à 5"; 
                        break; 
                    } 
                
                } while (1); 
            ?>
                <br><br>
            <?php
                for ($a = 1; $a < 10; $a++) { 
                    echo "Passage n°$a"; 
                }
            ?>
                <br><br>
            <?php
                $montableau = array("pommes", "cerises", "poires");

                foreach ($montableau as $element){ 
                    echo $element; 
                }
            ?>

                
































        </body>
    </htlm>