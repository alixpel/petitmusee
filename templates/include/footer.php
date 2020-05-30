<div class="footer-hr">
</div>
<footer>
  <?php include "navigation.php" ?>
  <div class="address-group">
    <div class="adresse">
      <p class="footer-text">
        Musée Alix Pelletier<br>
        69, rue de la République<br>
        38260 La Côte Saint André
      </p>
    </div>
    <div class="social-media">
      <p class="footer-text"><a href="#"><i class="fab fa-facebook"></i> facebook</a></p>
      <p class="footer-text"><a href="#"><i class="fab fa-twitter"></i> twitter</a></p>
    </div>
  </div>
  <div class="cgu">
    <p class="footer-text"><a href="<?php echo $_url_base ?>admin/connexion.php">admin</a></p>
    <p class="footer-text">© alixpelletier <?php echo date("Y"); ?></p>
  </div>

</footer>
<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script type="text/javascript" src="<?php echo $_url_base . $_dossier_template ?>js/script.js"></script>

</body>
</html>
