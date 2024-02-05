<?php
include_once "$racine/vue/vueDeconnexion.php";


session_start();

session_destroy();
header('Location: index.php');
exit;	
