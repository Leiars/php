<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>bouclestableau</title>
        </head>
        <body>
         <table border="2">
            <?php
            echo"<th></th>";
                for ($index = 0; $index <= 12; $index++) //compteur
                {
                    echo "<th>".$index."</th>";
                }
                    for ($index2 = 0; $index2 <= 12; $index2++)
                        {
                            echo "<tr><th>".$index2."</th>";
                                for($index3 = 0; $index3 <= 12; $index3++){
                                    $p = $index2*$index3;
                                    echo ("<td>$p</td>"); //permet d'afficher dans le tableau la valeur
                                }
                        }
            ?>
            <table>

        </body>
    </html>        