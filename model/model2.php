<?php

require('connecte_db.php');

// insert des annonces du user 
function getinserts($identifiant,$titre,$message,$email) {
	
	$db = dbConnect();
	$req = $db->prepare('INSERT INTO annonces(identifiant,titre,message,email) VALUES(:identifiant,:titre,:message,:email)');
	$req->execute(array(':identifiant'=>$identifiant,
	                     ':titre'=>$titre,
						 ':message'=>$message,
						 ':email'=>$email
					   ));
	
	return $req;
	
}

// modifier l'annonce pour l'identifiant id

function udapte($id,$titre,$message){
	
	// on modifie les données de la tables infos_devis
	    $db = dbConnect();
		$req=$db->prepare('UPDATE annonces SET titre= :titres, messages= :message WHERE id= :id');
	    $req->execute(array(':titres'=>$titre,
		                    ':message'=>$message,
							':id'=>$id
						));
						
	return $req;
	
}

 // suprimer l'annonce du user 
 function show($identifiant) {
	 
	 // on modifie les données de la tables infos_devis
	    $db = dbConnect();
		$req=$db->prepare('DELETE FROM annonces WHERE identifiant= :identifiant');
	    $req->execute(array(':identifiant'=>$identifiant));
	 
 }


    
?>