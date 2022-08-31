<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>manipfichiers</title>

</head>
    <body>


        <?php

            // Lit une page web dans un tableau.
            $lines = file('/home/arous/Téléchargements/liens.txt');

            // Affiche toutes les lignes du tableau comme code HTML, avec les numéros de ligne
            foreach ($lines as $line_num => $line) 
            {
                echo "Line #<b>{$line_num}</b> : <a href=" .  htmlspecialchars($line) . ">".  htmlspecialchars($line) ."</a><br />\n";
            }


            /*$fp = fopen("/home/rasmus/file.txt", "r"); 
            $fp = fopen("../exemple.txt","a"); 
            $fp = fopen("http://www.php.net/", "r"); 
            $fp = fopen("ftp://user:password@example.com/", "w"); */

        ?>

    </body>
</html>
