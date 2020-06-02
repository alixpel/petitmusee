<?php
session_start();



$nomChampsObligatoires = array("email", "password"); // tableau
foreach($nomChampsObligatoires as $nomChamp) {
    if( empty($_POST[$nomChamp])) {
        $_SESSION["err"] = "champ";
        $_SESSION["champ_erreur"] =  $nomChamp;
        header("location:connexion.php");
        exit;
    }
}



if( $_POST["email"] == "admin@map.com" &&
    $_POST["password"] == "php2020"
    ) {
    $_SESSION["a_le_droit_de_se_connecter"] = TRUE;
    $_SESSION["emailadmin"] = $_POST["email"];
    header ("location:admin.php");

} else {
    $_SESSION['err'] = "identification";
    header ("location:connexion.php");
};



include("admin.php");

?>
