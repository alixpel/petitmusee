<?php
require "config.php";
unset($_SESSION["a_le_droit_de_se_connecter"]);
// session_destroy();
verif_connection();
