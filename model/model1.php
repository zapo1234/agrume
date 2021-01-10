<?php

require('connecte_db.php');


function annonces($email) {
	$db = dbConnect();
    $reqs = $db->prepare('SELECT id,titre,message,email,identifiant FROM annonces WHERE email = :email');
	$reqs->execute(array(':email'=>$email));
    return $reqs;
	
}


// recupére la lsites des insccrits dans la base de données

function posts() {
	$db = dbConnect();
    $reqs = $db->query('SELECT id,email,tel,adresse FROM inscrtis ORDER BY email ASC');
    return $reqs;
	
}

// recuperer un email existant dans la table
 
 function getmail($email) {
 
    $db = dbConnect();
    $req = $db->prepare('SELECT id,email,password ,adresse FROM inscrtis WHERE email = :email');
    $req->execute(array(':email'=>$email));
    $post = $req->fetch();

    return $post;
}


// model pour insert des élements pour le register user
function getinsert($email,$number,$adresse,$password) {
	
	$db=dbConnect();
	$req = $db->prepare('INSERT INTO inscrtis(email,tel,adresse,password) VALUES(:email,:tel,:adresse,:password)');
	$req->execute(array(':email'=>$email,
	                     ':tel'=>$number,
						 ':adresse'=>$adresse,
						 ':password'=>$password
					   ));
	
	return $req;
	
}
?>