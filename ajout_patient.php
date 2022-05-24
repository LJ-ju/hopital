<html>
    <body>
        <form action="traitementP.php" method='POST'><!--utilisation de la méthode post, et insertion du fichier traitement.php-->
        <link rel="stylesheet" href="tab2.css" media="all" type="text/css" />
        <fieldset>
            <legend>Nouveau Patient</legend>
            <div>
                Nom : <input type="text" name = "nom" id="nom"/><br />
                Prenom: <input type="text" name="prenom" id="prenom"/><br />
                eMail: <input type="mail" name="mail" id="mail" placeholder="me@exemple.com" /><br />
                Date de naissance :<input type="date" id="date_naissP" name="date_naissP" value="2012-07-22" min="2014-01-01" max="2018-12-31">
                Tailles : <input type="number" name="taille" id="taille" /><br />
                Poids : <input type="number" name="poids" id="poids" /><br />
            </div>
        </fieldset>
        <div>
            <button type="submit" value="envoyer">Enregistrer</button> &emsp;
        </div>
        </form>
        
        <button value="Liste des patients" onclick="window.location.href='patient.php'">Liste des patients</button>
        
        <!--<input type="button" value="Liste des utilisateurs" onclick="window.location.href='./session.php'">afficher les utilisateurs déjà présents.-->    </body>
</html>