<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>mdp1</title>
        </head>
        <body>

            <?php
        
             function password($mdp)

                {
                    $majuscule = preg_match('@[A-Z]@', $mdp);
                    $minuscule = preg_match('@[a-z]@', $mdp);
                    $chiffre = preg_match('@[0-9]@', $mdp);

                    if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) >= 8)
                    {
                        return false;
                    }
                    else 
                        return true;
                }

                if (password ("mmmmmmm") != true)
                {
                    echo "false";
                }
                else 
                    echo "true";
       
            ?>
        
                     
            

            













        </body>
    </html>