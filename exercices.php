<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>exercices</title>
        </head>
        <body>

        <?php
            $min = 1;
            $max = 150;
 
            echo 'Les chiffres impairs compris entre '.$min.' et '.$max.' sont:';
        
            for($i = $min; $i < $max ; $i=$i+2){
             echo $i.' ';
            }
        ?>  
            <br><br>

        <?php
            $nombre_de_lignes = 1;
            
            while ($nombre_de_lignes <= 10)
            
            {
            echo 'Je dois faire des sauvegardes régulières de mes fichiers.<br />';
            
            $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
            }
        ?>
            <br><br>
        
        <?php
            for ($i = 1; $i <= 10; $i++)
            {
            Echo 'Table de multiplication de '.$i.'<br>';
            for ($j = 1; $j <= 10; $j++)
            {
            echo $i.' x '.$j.' = '.$i*$j.'<br>';
            }
            }
        ?>
            <br><br>
        <?php
            if(isset($_POST['nombre']))
            {
            for($i =1 ; $i <= 9 ; $i++)
            {
            echo $i." X ".$_POST['nombre']." = ".$i*$_POST['nombre']."<br />";
            }
            }
        ?>
            <br>
        <?php
            session_start();
 
            if(isset($_POST['operateur']))
            {
            $_SESSION['operateur'] = $_POST['operateur'];
            }
 
            if(isset($_POST['nombre']))
            {
            if(!isset($_SESSION['operateur']))
            {
            $_SESSION['operateur'] = "*";
            }
            for($i =1 ; $i <= 9 ; $i++)
            {
            switch($_SESSION['operateur'])
            {
            case "*":
                echo $i." x ".$_POST['nombre']." = ".$i*$_POST['nombre']."<br />";
            break;
             
            case "+":
                echo $i." + ".$_POST['nombre']." =". ($i + $_POST['nombre'])."<br />";
            break;
            }
            }
            }
        ?>
            <form method="post">
            <button name="operateur" value="+">Additionner</button><button name="operateur" value="*">Multiplier</button>
            </form>
            <br>
            <form method="post">
            <?php
            for( $i = 1 ; $i <= 9 ; $i++)
            {
            echo '<button name="nombre" value="'.$i.'">'.$i.'</button>';
            }
        ?>
            </form>
                <br><br>

        </body>
    </html>