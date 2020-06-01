<?php
require "config.php";
unset($_SESSION["a_le_droit_de_se_connecter"]);
verif_connection();

// ou unset puis header puis exit
