<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Index</title>
        </head>
        <body>

            <?php 
                echo "Bonjour le monde";    
            ?>

            <?php
                $bonjour = "Bonjour le monde"; 
            ?>
                <br>

            <?php
                echo "<b>$bonjour</b>"; 
            ?>
                <br><br>
            <?php
                $var1 = "bonjour";
                $$var1 = '"le monde"'; 
                echo $bonjour;
                // affichera "le monde"
            ?>  
                <br><br>

            <?php
                echo "Affichage d'un guillemet double : \" "; 
            ?>
                <br><br>

            <?php
                echo "Bonjour le monde,\ncomment allez-vous ?";   
            ?>
                <br><br>

            <?php
                $euro=6.55957;
                
                printf("%.2f FF<br />",$euro);
            ?>
                <br>

            <?php
                $money1 = 68.75;
                $money2 = 54.35;
                $money = $money1 + $money2;
                // echo $money affichera "123.1";
                echo "affichage sans printf : " . $money . "<br />";
                $monformat = sprintf("%01.2f", $money);
    
                // echo $monformat affichera "123.10"
                echo "affichage avec printf : " . $monformat . "<br />";
    
                $year="2002";
                $month="4";
                $day="5";
                $varDate = sprintf("%02d-%02d-%04d", $day, $month, $year) ;
    
                // echo $varDate affichera "2002-04-05"
                echo "affichage avec sprintf : " . $varDate;
            ?>
                <br><br>
            <?php
                define("EURO", 6.55957);
                echo EURO; // affiche 6.55957
            ?>
                <br><br>

            <?php
                 echo "Fichier : " . __FILE__ . ", ligne : " . __LINE__ ;
            ?>
                <br><br>
                <?php
                $message = __FILE__." l.".__LINE__." : Ouh là pas bien du tout ";
                error_log($message);  
                ?>
                    
            <?php

                $_GET["societe"] = "Afpa";
                echo $_GET["societe"]; // Affiche \'Afpa';
            ?>
                <br><br>

            <?php
                $a = "Winter";
                $a .= " is coming !";
                echo $a;
            ?>
                <br>

            <?php
                $resultat_test_a = (intval("12") == 12);
                // $resultat_test_a vaut Vrai
                if($resultat_test_a == true){
                    echo 1;
                };
                ?>
                <br>
                <?php

                $resultat_test_b = (765 < 123);
                // $resultat_test_b vaut Faux
                if($resultat_test_b == false){
                    echo 0;
                };
            ?>

        </body>
    </html>