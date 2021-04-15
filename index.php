<?php 
    session_start(); 
?>
<html>
    <head>
	<!-- zone en tête -->
	<meta charset="utf-8" />
	<title>Gestion location de salle</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
        <div class="container fluid">
            <form method="post" action="verif.php">
                <div class="form-group">
                    <label for="id_nom">Votre identifiant </label>
                    <input type="text" name="ident" id="idident" class="fadeIn_second" alt="Identifiant" />
                </div>
                <div class="form-group">
                    <label for="id_pass">Votre mot de passe </label>
                    <input type="password" name="pass" id="idpass" class="fadeIn_second" alt="Mot de passe"/>
                </div>
                <input type="submit" value="Valider" />
            </form>
        </div>
<?php 
    if (isset($_SESSION['erreur'])){
        if ($_SESSION['erreur'] != NULL) {
            echo '<p> '.$_SESSION['erreur'];
        }
    }
?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </body>
</html>