<?php

include "config.php";

include "contenu.php";

if (isset($contenuSite["artiste"][$_GET["artisteChoisi"]])) {
  $contenuArtiste = $contenuSite["artiste"][$_GET["artisteChoisi"]];
  include $_dossier_template  . "templates/artiste.php";
}
else {
  header("Location: $_url_base");
  exit();
}
