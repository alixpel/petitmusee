<?php
require "config.php";
verif_connection();

// envoi du texte :
$fichier = fopen('fichiers_envoyes/textes/mon_fichier_texte.txt', 'w+');// remplacer a+ par w+
if (isset($_POST['mon_texte'])) {
  fwrite($fichier, "<p>" . $_POST['mon_texte'] . "</p>");
}
  fclose($fichier);


// envoi d'image :
if(!empty($_FILES["mon_fichier"]) && $_FILES["mon_fichier"]["error"] == 0 ) {
  $nom_dossier_destination = "fichiers_envoyes/fichiers";// dossier de destination
  $chemin_dossier_destination = __DIR__ . "/" . $nom_dossier_destination; // dir = cste qui indique chemin de destination
  $chemin_fichier_destination = $chemin_dossier_destination . "/" . "accueil.jpg";// nouveau nom
  // ou "accueil.jpg";// nouveau nom. et mettre une div image ds la page d'accueil avec le bon chemin.

  move_uploaded_file($_FILES["mon_fichier"]["tmp_name"], $chemin_fichier_destination);// lien vers le fichier. tmp :

}

header ("location:admin.php");
