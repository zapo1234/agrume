<?php
require('controller/controller_index.php');
if(isset($_GET['action'])) {
	
// on recupere l'inscription du user dans la table
if($_GET['action']== 'addComment') {
  // on encode le mot de pass avec hash
  $password = $_POST['pass'];
  $options = array('cost' => 11);
 $pass_hash = password_hash($password, PASSWORD_BCRYPT, $options);
 
 // on récupere l'email dans la base de données pour verification
 $post=getmail($_POST['email']);

if($post['email']!=$_POST['email']) {

// on récupere la fonction dans le controlleur_index
addComment($_POST['email'],$_POST['number'],$_POST['adresse'],$pass_hash);
	
}

else{
	echo'ce email existe deja';
}
		
}


// page de login connexion

elseif($_GET['action']== 'login') {
   enter();
}

// on connecte  le user dans l'admin 
elseif($_GET['action']== 'addLogin') {
	
	$connex = getmail($_POST['email']);
	// on recupere le password de la table
	$path = $connex['password'];
	$password = $_POST['pas'];
  
  if(password_verify($password,$path)) {
	
	  // on appelle la fonction dans notre controlleur_index
     addLogin();
   }
   
   else{
	   
	  echo'accès invalides'; 
	   
   }
   
   
}

// la route index à l'ouverture du site
elseif($_GET['action']== 'login_user') {
	user();
	
}

// la route index à l'ouverture du site
elseif($_GET['action']== 'logins') {
users();
	
}


}


 // on envoi le user sur la page index 
else{
	
	login();
	
}



?>