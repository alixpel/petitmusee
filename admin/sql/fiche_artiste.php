<?php
include "../include/head.php";

$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "root";
$nomBaseDeDonnees = "petit_musee";
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees" , $utilisateur, $motDePasse);

// if (empty($_GET["lien_artiste"])) {
//   header("location:index.php");
// }

$rep2 = $bdd->query("select * from artiste where id_artiste = " . $_GET["lien_artiste"]);
$result_artistes = $rep2-> fetch();

if ($_GET["lien_artiste"] > count($result_artistes)) {
  header("location:index.php");
}

echo "<h2>" . $result_artistes["prenom"] . " " . $result_artistes["nom"] . "</h2>";
echo "<ul>";
echo "<li>Dates : " . $result_artistes["dates"] . "</li>";
echo "<li>Biographie : " . $result_artistes["biographie"] . "</li>";
echo "</ul>";

include "../include/footer.php";
  ?>
