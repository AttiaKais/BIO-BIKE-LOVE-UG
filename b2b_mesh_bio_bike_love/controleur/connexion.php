<?php

session_start();

include_once "$racine/modele/bd.inc.php";
include_once "$racine/modele/bd.connexion.inc.php";
include_once "$racine/vue/vueConnexion.php";


if(!empty($_POST)){
	extract($_POST);
	$valid = true;
	
	$mail = htmlspecialchars(trim($mail));
	$password = trim($password);
		
	if(empty($mail)){
		$valid = false;
		$_SESSION['flash']['warning'] = "Veuillez renseigner votre mail !";
	}
	
	if(empty($password)){
		$valid = false;
		$error_password = "Veuillez renseigner un mot de passe !";
	}
	
	
	// Utilisation d'une requête préparée
$query = 'SELECT * FROM client WHERE mail = :mail AND password = :password';
$stmt = $con->prepare($query);
$stmt->bindParam(':mail', $mail);
$stmt->bindParam(':password', $password);
$stmt->execute();

// Fetching the result
$ret = $stmt->fetch(PDO::FETCH_ASSOC);
		
	if ($ret === false || !$ret['mail']){
		$valid = false;
		$_SESSION['flash']['danger'] = "Mail or Password are incorrect";
	}
	
	
	if($valid){
		
		//$_SESSION['id'] = $req['id'];
		$_SESSION['mail'] = $ret['mail'];
		$_SESSION['password'] = $ret['password'];
		
		$_SESSION['flash']['info'] = "Hello " . $_SESSION['mail'];
		header('Location: ?action=produit');
		exit;
			
	}
	
}	

	if(isset($_SESSION['flash']['danger'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['flash']['danger'] . '</div>';
    // Supprimez le message après l'affichage pour qu'il ne s'affiche pas de manière répétitive
    unset($_SESSION['flash']['danger']);
}
	