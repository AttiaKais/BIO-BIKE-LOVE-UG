<?php

$inscrit = false;
$msg="";
 
include_once "$racine/modele/bd.inscription.php";
include_once "$racine/modele/bd.inc.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire avec des valeurs par défaut pour éviter les warnings
    $name = $_POST['name'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $mail = $_POST['mail'] ?? '';
    $number = $_POST['number'] ?? '';
    $cpname = $_POST['cpname'] ?? '';
    $cpadress = $_POST['cpadress'] ?? '';
    $vatnumber = $_POST['vatnumber'] ?? '';
    $password = $_POST['password'] ?? '';
    $cpzipcode = $_POST['cpzipcode'] ?? '';
    $cpcity = $_POST['cpcity'] ?? '';

    // Appel de la fonction d'ajout du visiteur
$ret = addvisiteur($name, $lastname,$mail,$number,$cpname,$cpadress,$vatnumber,$password,$cpzipcode,$cpcity);
    if ($ret) {
        // L'ajout a réussi, vous pouvez rediriger l'utilisateur vers une page de confirmation
        $inscrit = true;
    } else {
        // L'ajout a échoué, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message
        echo "Failed to sign up.";
    }
}

if ($inscrit) {
    // appel du script de vue qui permet de gérer l'affichage des données
    $titre = "Inscription confirmée";
    include "$racine/vue/vueConfirmationInscription.php";
} else {
    // appel du script de vue qui permet de gérer l'affichage des données
    $titre = "Inscription pb";
    include "$racine/vue/vueInscription.php";
}
