<?php

require "config.php";
verif_connection();


 ?>

 <?php include "include/head.php" ?>
  <div class="container">
    <p>lalali</p>

    <div class="identifiants">
      <table>
          <tr>
              <td>Email</td>
              <td><?php echo $_SESSION["emailadmin"] ?></td>
          </tr>
      </table>

      <div class="">

      </div>

    </div>

  </div>

<?php include "include/footer.php" ?>
