<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contact</title>
</head>
<body>
    <div class="entetelogo"> 
        <img src="src/img/jarditou_logo.jpg" class="logo"><br>
        <p>Tout le jardin</p>
    </div>
    <ul>
        <li> <a href="index.html" title="accueil">Accueil</a></li>
        <li> <a href="tableau.html" title="tableau">Tableau</a></li>
        <li> <a href="contact.html" title="contact">Contact</a></li>
    </ul>
    <img src="src/img/promotion.jpg" class="promotion"><br><br>

    <h1>Contact</h1>

    <hr>
    <p>*ces zones sont obligatoies</p>
        
        
        <br>
        <form action="script.php" method="post">
    
            <fieldset>
                <legend>Vos coodonnées</legend>
                <label for="nom">Nom* : </label><input type="text" name="nom" id="nom"><br> <br>
                <label for="prenom">Prenom* : </label><input type="text" id="prenom" name="prenom"><br> <br>
                <label>sexe* :</label>
                    <input type="radio" id="masculin" value="Masculin" name ="sexe">
                    <label for="masculin">Masculin</label>
                    <input type="radio" id="feminin" value="Féminin" name ="sexe">
                    <label for="feminin">Feminin</label>
                <br> <br>
                <label for="date">Date de naissance* : </label><input type="date" name="ddn" id="date">
                <br> <br>
                <label for="cp" >code postale* : </label><input type="text" name="cp" id="cp"><br> <br>
                <label for="adresse">adresse : </label><input type="text" name="adresse" id="adresse"><br> <br>
                <label for="ville">ville : </label><input type="text" name="ville" id="ville"><br> <br>
                <label for="email">email* : </label><input type="text" name="email" id="email"><br> <br>
            </fieldset><br>

            <fieldset>
                <legend>Votre demande</legend><br>
                <label for="sujet*">Sujet*</label>
                <select id="sujet*" name="sujet">
                    <option>veuillez selectionner un sujet</option>
                </select>
                <br>
                <label for="commentaire">Votre question* : </label><textarea id="commentaire" name="commentaire" rows="10" cols="50"></textarea><br> <br>
            </fieldset>


            <br>
            <input type="checkbox" name="checkbox" id="checkbox"  value=""> 
                <label for="checkbox">* J'accepte le traitement informatique de ce formulaire</label><br><br>
                <input type="submit" value="Envoyer"> 
                <input type="reset" value="annuler"><br>
                
            <hr>
            <ul>
                <li> <a href="jarditouaccueil.html" title="mention légales">Mentions légales</a></li>
                <li> <a href="jarditouaccueil.html" title="horaires">Horaires</a></li>
                <li> <a href="jarditouaccueil.html" title="plan du site">Plan du site</a></li>
            </ul>
    
        </form>

        <script src="Js/eval5.js"></script>
</body>
</html>