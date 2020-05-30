<?php
$_SESSION = [];
require "config.php";
session_destroy();
verif_connection();
header ("location:connexion.php");
