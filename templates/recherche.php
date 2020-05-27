<?php include "include/head.php" ?>

  <main>
    <div class="recherche-artiste">
      <h3><?php  echo $contenuSite["recherche"]["sous-titre"]; ?></h3>

    </div>
    <div class="menu-recherche">
      <select name='formal' onchange='javascript:handleSelect(this)'>
        <option disabled='disabled' default='true' disabled selected>Choisissez</option>
        <?php
          foreach ($contenuSite["artiste"] as $key => $value) {
            echo "<option value='artiste.php?artisteChoisi=$key'>$key</option>";
          };
        ?>
      </select>
    </div>
  </main>

  <?php include "include/footer.php" ?>
