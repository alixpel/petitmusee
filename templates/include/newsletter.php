<?php
$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = 'root';
$nomBaseDeDonnees = "newsletter";
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// ====================================================

      if (!empty($_POST["email"])) {
        $ajout_abonne = "INSERT INTO newsletter(email) VALUES" .
                        "
                        ('" . $_POST["email"] . "')
                        ";
        echo $ajout_abonne;
        $bdd -> query($ajout_abonne);
      } else {
        echo "<p>Veuillez remplir tous les champs</p>";
      }

?>
