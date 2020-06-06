<?php

function vd($var) {
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}

$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "root";

$nomBaseDeDonnees = "petit_musee";

$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees" , $utilisateur, $motDePasse);

$rep = $bdd->query("select * from oeuvre");

$result_oeuvres = $rep-> fetchAll();

echo "<ul>";
foreach ($result_oeuvres as $key => $oeuvre) {
  echo "<li>- Titre de l'œuvre : " . $oeuvre["titre"] . "</li>";
}
echo "</ul>";

 ?>

 <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;1,400&display=swap" rel="stylesheet">
 <style>
   li {
     font-family: 'Montserrat', sans-serif;
     list-style-type: none;
   }
 </style>
