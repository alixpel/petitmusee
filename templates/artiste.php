<?php
    include "include/head.php";

?>

  <main>
    <div class="container">

      <div class="contenu-artiste">

        <div class="nom-artiste">
          <h3><?php echo $contenuArtiste["nom"]?></h3>
        </div>

        <figure class="figure-oeuvre">
          <?php echo $contenuArtiste["figure-oeuvre"]?>
        </figure>

        <div class="texte-biographie-complete">
          <?php echo $contenuArtiste["biographie"]?>
        </div>

      </div>

    </div>
  </main>


<?php
include "include/footer.php";
?>
