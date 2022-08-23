<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>tableau</title>
        </head>
        <body>
            <table border="2">
        <?php
            echo"<th></th>";
            for($table=0; $table <=12; $table++)
            {
            echo"<th>".$table."</th>"; //encadrement
            }

            for ($table1 = 0; $table1 <= 12; $table1++)
            
            {
            echo ("<tr><th>".$table1."</th>");

            for($table2 = 0; $table2 <= 12; $table2++){
                $p = $table1 * $table2;
            echo ("<td>$p</td>"); //permet d'afficher dans le tableau la valeur
            }
            }
            
        ?>
            

            
 
        <table border="8">

                <br><br><br><br>

            <caption>Passagers du vol 377</caption>

            <tr>
                <th>Nom</th>
                <th>Pays</th>
            </tr>
            <tr>
                <td>Leïla</td>
                <td>Thaïti</td>
            </tr>
            <tr>
                <td>Anaki</td>
                <td>Thaïti</td>
            </tr>
        </table>




        </body>
    </html>      
