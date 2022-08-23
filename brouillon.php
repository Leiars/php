<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>bouclestableau</title>
        </head>
        <body>

        <?php
            $tab = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);

                echo "<table border='1'>";
                echo "<tr style='font-weight: bold;'>";
                echo "<td></td>";

                    foreach($tab as $val){
                echo "<td>$val</td>";
                }

                echo "</tr>";

                    foreach($tab as $val2){
                echo "<tr>" ;
                echo "<td style='font-weight: bold;'>$val2</td>";

                    foreach($tab as $val){
                echo "<td>" . $val2*$val . "</td>";
                }
                }
        ?>

        </body>
    </html> 