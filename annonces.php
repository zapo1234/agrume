<?php
require('session_security/inc_session.php');
require('controller/annonces_controlleur.php');

// on enregsitre l\'annonce du user dans la table
if($_GET['action']== 'addAnnonce') {

$identifiant = rand(1,100000);
$titre = html_entity_decode($_POST['titre']);
$message =html_entity_decode($_POST['message']);
$email =$_SESSION['email'];

// verification du token de sécurity 
if(isset($_SESSION['token']) && isset($_SESSION['token_time']) && isset($_POST['token']))
		
{
	//Si le jeton de la session correspond à celui du formulaire
	if($_SESSION['token'] == $_POST['token'])
	{
		//On stocke le timestamp qu'il était il y a 15 minutes
			
		if(!empty($_POST['titre']) AND  !empty($_POST['message'])){
		  // on enregsitre les valeur
         addAnnonce($identifiant,$titre,$message,$email);
		 
	   }
	}
	
	else{
		
		echo'invalide token user';
	}
}




}

// on suprime l

if($_GET['action']== 'show_annonce') {
	
 if(isset($_GET['id_annonce'])) {
	
	$identifiant =$_GET['id_annonce'];
	// on suprime l'annonces
	
	show($identifiant);
	 
	 echo'annonce suprimée';
 }
 
 else{
	 
	 echo'identifiant n\'existe pas';
 }
	
}


?>