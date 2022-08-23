<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>mdp</title>
        </head>
        <body>

            <?php
        
        
        $strings = array();
        $strings[] = "premier";
        $strings[] = "second\n";
        
        foreach($strings as $string)
        {
            if(preg_match('/^[a-z]+$/D', $string))
            {
                echo '<span style="background: lightgreen;">'.nl2br($string)." est valide</span>";
            }
            else
            {
                echo '<span style="background: red;">'.nl2br($string)." n'est pas valide</span>";
            }
        
            echo '<br />';
        }
            ?>
        
                     
            

            













        </body>
    </html>