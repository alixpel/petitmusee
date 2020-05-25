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

        <div class="texte-et-aside">
          
          <div class="texte-biographie-complete">
            <?php echo $contenuArtiste["biographie"]?>
          </div>

          <div class="aside">
            <?php echo $contenuArtiste["aside"]["portrait"] ?>
            <?php echo $contenuArtiste["aside"]["citation"] ?>
          </div>

        </div>



      </div>

    </div>
  </main>


<?php
include "include/footer.php";
?>
