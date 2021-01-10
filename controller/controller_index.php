 <?php
require('model/model1.php');
function login() {

// template register user	
require('templates_view/page_login.php');
	
}

// template login connexion
function enter(){
	
require('templates_view/login_user.php');

}

function post(){
	
$post = getmail($_POST['email']);
	
}

function addLogin() {
// page d'acceuil
   session_start();
	// créer nos variables de session à enregsitrer
	$_SESSION['email']= $_POST['email'];
	// création des session intensification sécurité
    $_SESSION['pmd']= sha1(uniqid('',true).'_'.mt_rand());
	 $_SESSION['ip']= $_SERVER["REMOTE_ADDR"];
	 
	 // creation de tokens sécruity
   $token = openssl_random_pseudo_bytes(16);
    //Convert the binary data into hexadecimal representation.
    $token = bin2hex($token);
     $_SESSION['token'] = $token;
	 //On enregistre aussi le timestamp correspondant au moment de la création du token
      $_SESSION['token_time'] = time();
	 //On modifie les donnees
	 
	 $result = getmail($_POST['email']);
	 // on recupere les données du user
	 $_SESSION['result']= $result;
	
	
header('Location: index.php?action=logins');
}


function deconnexion () {
	
	// Détruit toutes les variables de session
     $_SESSION = array();
 // Si vous voulez détruire complètement la session, effacez également
   // le cookie de session.
   // Note : cela détruira la session et pas seulement les données de session !
    if (ini_get("session.use_cookies")) {
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time() - 3600,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]
	);

    session_unset();
 // Finalement, on détruit la session.
    session_destroy();
	  
	  header('location: user_login.php');
	
 }
}

function addComment($email,$number,$adresse,$password) {

$line = getinsert($email,$number,$adresse,$password);
	
header('Location: index.php?action=login_user');
	
}

function user(){
	$list= posts();
	require('templates_view/zapo.php');
	
}

function users(){
	require('templates_view/admin_user.php');
	
}



?>