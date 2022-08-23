<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>dpts</title>
        </head>
        <body>

        1 - Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements
            <br><br>

            <?php
            $departements = array
               ("Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
                "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
                "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
                "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime"),
               );

             asort($departements);
                foreach($departements as $key1 => $regions_departements)
                foreach($regions_departements as $key2)
                {
                echo $key1.":".$key2."<br>";
                }
            ?>
            <br><br>

        2 - Affichez la liste des régions suivie du nombre de départements
            <br>

            <?php
            $departements = array
            ("Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
             "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
             "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
             "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime"),
            );

                foreach($departements as $key1 => $value1)
                {
             var_dump($key1);
             var_dump(sizeof($value1));
                }
            ?>

        </body>
    </html>