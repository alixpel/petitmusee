<nav>
    <ul>
      <li>
            <a href="index.php">Accueil</a>
      </li>

      <?php
     foreach ($contenuSite["menus"] as $key => $valeur) {
       echo "<li><a href=\"jour.php?jourChoisi=$key\">$key</a>
         </li>";
     }
     ?>

      <!-- <li>
            <a href="jour.php?jourChoisi=lundi">Lundi</a>
      </li>
      <li>
            <a href="mardi.php">Mardi</a>
      </li>
        <li>
            <a href="mercredi.php">Mercredi</a>
        </li>
        <li>
            <a href="jeudi.php">Jeudi</a>
        </li>
        <li>
            <a href="vendredi.php">Vendredi</a>
        </li>
        <li>
            <a href="samedi.php">Samedi</a>
        </li>
        <li>
            <a href="dimanche.php">Dimanche</a>
        </li> -->

    </ul>
</nav>
