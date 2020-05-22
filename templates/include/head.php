<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo isset($title_page) ? $title_page : strtoupper($nom_du_musee) . " - Musée" ?></title>
    <!-- GOOGLE FONTS : -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- CSS : -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- ICONS : -->
    <link rel="icon" href="assets/photos/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/030bc59c7c.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="covid-banner">
      <p> ALERTE INFO COVID-19 &nbsp<i class="fas fa-viruses fa-2x"></i><br>
      RÉOUVERTURE DES MUSÉES DÉPARTEMENTAUX À PARTIR DU 18 MAI (voir infos pratiques de chaque musée).<br>
      Et toujours LA CULTURE S'INVITE CHEZ VOUS... sur musees.isere et culture.isere,<br>
      pour continuer à vous cultiver autrement ! INFOS CORONAVIRUS sur www.isere.fr</p>
      <button type="button" class="acceptbutton">C'est noté !</button>
    </div>
    <header>
      <div class="container">
        <h1><?php echo $contenuSite["accueil"]["titre"]?></h1>
        <?php include "navigation.php" ?>
      </div>
    </header>
