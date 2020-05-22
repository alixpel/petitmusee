<?php include "include/head.php" ?>

  <main>
    <div class="recherche-artiste">
      <h3><?php  echo $contenuSite["recherche"]["sous-titre"]; ?></h3>
    </div>
    <div class="menu-recherche">
      <?php
        echo $contenuSite["recherche"]["menu-deroulant"];
       ?>
    </div>
  </main>

  <?php include "include/footer.php" ?>
