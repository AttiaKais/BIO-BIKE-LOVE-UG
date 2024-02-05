<?php

function ControleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "acceuil.php";
    $lesActions["Inscription"] = "inscription.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["produit"] = "produit.php";
    $lesActions["commande"] = "commande.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["contact"] = "contact.php";



    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}

?>
