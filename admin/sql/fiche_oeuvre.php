<?php
include "../include/head.php";

$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "root";
$nomBaseDeDonnees = "petit_musee";
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees" , $utilisateur, $motDePasse);

// if (empty($_GET["lien_oeuvre"])) {
//   header("location:index.php");
// }

$rep1 = $bdd->query("select * from oeuvre where id_oeuvre = " . $_GET["lien_oeuvre"]);
$result_oeuvres = $rep1-> fetch();

if ($_GET["lien_oeuvre"] > count($result_oeuvres)) {
  header("location:index.php");
}

echo "<h2>" . $result_oeuvres["titre"] . "</h2>";
echo "<h3>" . $result_oeuvres["sous-titre"] . "</h3>";
echo "<ul>";
echo "<li>" . $result_oeuvres["support"] . "</li>";
echo "<li>" . $result_oeuvres["courant"] . "</li>";
echo "<li>" . $result_oeuvres["date"] . "</li>";
echo "</ul>";


include "../include/footer.php";
  ?>
