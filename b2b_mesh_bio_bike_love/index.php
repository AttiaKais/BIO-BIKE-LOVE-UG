<?php
include "getRacine.php";
include "$racine/controleur/ControleurPrincipal.php";


if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{
    
    $action = "defaut";
}

$fichier = ControleurPrincipal($action);
include "$racine/controleur/$fichier";