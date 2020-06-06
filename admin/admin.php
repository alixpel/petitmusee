<?php

require "config.php";
verif_connection();

 ?>

 <?php include "include/head.php" ?>
  <div class="container">

    <div class="identifiants">
      <table>
          <tr>
              <td>Email</td>
              <td><?php echo $_SESSION["emailadmin"] ?></td>
          </tr>
      </table>
      <hr>
      <table>
        <tr>
          <td><a href="sql/index.php">Base de données</a></td>
        </tr>
      </table>
    </div>

    <div class="administrer">

      <a href="admin.php">Réinitialiser le formulaire</a>

      <form method="post" action="admin_reponse.php" enctype="multipart/form-data">
          <label for="mon_texte" >Texte à envoyer :</label>
          <textarea id="mon_texte" name="mon_texte" rows="5" cols="33"><?php echo strip_tags(file_get_contents(__DIR__ . "/fichiers_envoyes/textes/mon_fichier_texte.txt")); ?></textarea>
            <!-- pour récupérer le texte écrit dans le textarea : -->
          <br><br>
          "<label for="mon_fichier">Fichier à envoyer :</label>
          <input name="mon_fichier" id="mon_fichier" type="file" />"

          <hr>

          <button type="submit">Envoyer</button>
      </form>



          <div class="resultat_mon_texte">
          <?php
          // if (isset($_POST['mon_texte'])) {
          //    echo $_POST["mon_texte"];
          //  }
          //  echo "<hr>";
          //
          // Texte écrit dans le fichier txt :
          if (is_file("fichiers_envoyes/textes/mon_fichier_texte.txt")) {
            $contenuFichier = file_get_contents("fichiers_envoyes/textes/mon_fichier_texte.txt");
          } else {
            echo "ATTENTION - <br> <strong>fichiers_envoyes/textes/mon_fichier_texte.txt</strong> : ce fichier n'existe pas";
            exit;
          }
         ?>
         <p> Le contenu de mon_fichier_texte.txt est : </p>
         <?php
          echo str_replace(PHP_EOL, "<br>", $contenuFichier) ;
         ?>
         <hr>
         <a href="effacer_texte.php">Effacer le contenu de <strong>mon_fichier_texte.txt</strong></a>
         </div>
         <div class="deconnexion">
           <a href="deconnexion.php">Déconnexion</a>
         </div>


    </div>

  </div>

<?php include "include/footer.php" ?>
