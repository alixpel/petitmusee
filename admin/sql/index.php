<?php

function vd($var) {
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
// header :
include "../include/head.php";

$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "root";
$nomBaseDeDonnees = "petit_musee";
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees" , $utilisateur, $motDePasse);

$rep1 = $bdd->query("select * from oeuvre");
$result_oeuvres = $rep1-> fetchAll();
$rep2 = $bdd->query("select * from artiste");
$result_artistes = $rep2-> fetchAll();

?>

<div class="container">
  <div class="liste-oeuvres">
    <h2>Œuvres</h2>
    <?php
    echo "<ul>";
    foreach ($result_oeuvres as $key1 => $oeuvre) {
      $url_oeuvre = "fiche_oeuvre.php?lien_oeuvre" . $oeuvre["id_oeuvre"];
      echo "<li><a href='$url_oeuvre'>" . $oeuvre["titre"] . "</a></li>";
    }
    echo "</ul>";
     ?>
  </div>
  <div class="liste-artistes">
    <h2>Artistes</h2>
    <?php
    echo "<ul>";
    foreach ($result_artistes as $key2 => $artiste) {
      $url_artiste = "fiche_artiste.php?lien_artiste" . $artiste["id_artiste"];
      echo "<li><a href='$url_artiste'>" . $artiste["prenom"] . " " . $artiste["nom"] . "</a></li>";
    }
    echo "</ul>";
     ?>
  </div>
</div>

<?php // footer
include "../include/footer.php";
 ?>
