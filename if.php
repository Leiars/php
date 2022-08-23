<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>If</title>
        </head>
        <body>

                <?php
                    //     if ( condition )
                   // { 
                  // //Instructions; 
                 // } 
                //     else if ( condition )
               // { 
              // //Instructions; 
             // } 
            //     else 
           // { 
          // //Instructions; 
         // } 

                 $a = 2; 
                 switch ($a) { 
                 case 0 : 
                 echo"$a = 0"; 
                 break; 

                case 1 : 
                echo "$a = 1"; 
                break; 

                case 2 : 
                echo "$a = 2"; 
                break; 
                };
                ?>
                 <br><br>

                <?php   
                 $age = 25; 

                 $reponse = ($age >= 18) ? "majeur" : "mineur"; 
    
                 echo "Vous êtes $reponse ."; 
                ?>
                    <br><br>

                <?php
                 switch ($a) { 
                    case 0 : 
                      echo"$a = 0"; 
                    break; 
                  
                    case 1 : 
                      echo "$a = 1"; 
                    break; 
                  
                    case 2 : 
                       echo "$a = 2"; 
                    break; 
                  } 
                ?>

                  <br><br>

                <?php


                echo "$a n'est pas égale à 0,1 ou 2"; 
                ?>

                
        </body>
    </html>