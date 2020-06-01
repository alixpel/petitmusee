<?php include "include/head.php" ?>

  <main>
    <div class="musee-image">
      <?php
        echo $contenuSite["accueil"]["musee-img"];
        echo $contenuSite["accueil"]["sous-titre"];
       ?>
    </div>
    <div class="container">
      <div class="texte-accueil">
        <?php
          echo $contenuSite["accueil"]["texte"];
         ?>
      </div>
      <div class="sent-content">
          <?php echo nl2br(file_get_contents(__DIR__ . '/../admin/fichiers_envoyes/textes/mon_fichier_texte.txt'));
          //echo __DIR__ . '/../admin/fichiers_envoyes/textes/mon_fichier_texte.txt';
          ?>
        <img src="<?php echo $_url_base; ?>/admin/fichiers_envoyes/fichiers/accueil.jpg" alt="">
      </div>
    <div>
  </main>

  <?php include "include/footer.php" ?>
