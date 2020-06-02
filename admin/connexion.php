<?php include "include/head.php";
session_start();

?>


  <div class="main">

    <h2>formulaire de connexion</h2>

    <form class="" action="verifier_reponses.php" method="post">

      <!-- Fonctions -->
      <?php if (!empty($_SESSION['err']) && $_SESSION['err'] == 'champ') {
              echo "<div class=\"error\">";
              echo "merci de vérifier que tous les champs soient remplis";
              echo "</div>";
              unset($_SESSION['err']);
            }
              function addClassErreurChamp($champVide) {
              if (!empty($_SESSION['problemechamp']) && $_SESSION['problemechamp'] == $champVide) {
                echo "erreurchamp";
              }
            }

          // erreur dans le champ
          if (!empty($_SESSION['err']) && $_SESSION['err'] == 'identification') {
              echo "<div class=\"error\">";
              echo "merci de vérifier vos identifiants et mots de passe";
              echo "</div>";
              unset($_SESSION['err']);
            }
         ?>
         <!-- fin fonctions -->

      <div class="champ <?php addClassErreurChamp("email"); ?>">
        <label for="email">email : </label>
        <input name="email" type="email"><br>
      </div>
      <div class="champ <?php addClassErreurChamp("password"); ?>">
        <label for="password">mot de passe : </label>
        <input name="password" type="password"><br>
      </div>

      <button type="submit">valider</button>

    </form>

  </div>

<?php include "include/footer.php" ?>
