 <?php
 
 if (!isset($_SESSION)) {
        session_start();
    }

$lstLangue = array('fr');

    if(isset($_GET['lang']) && isset($lstLangue[$_GET['lang']]))
        $_SESSION['lang'] = $_GET['lang'];

    if(!isset($_SESSION['lang']))
        $_SESSION['lang'] = 'fr';

    $lang = $_SESSION['lang'];
 
   // on defini une variable
	$temps=10;
	// teste l'existence d'ne variable
	if(isset($_SESSION['last_time'])){
	
    $secondtime	= time()- $_SESSION['last_time'];
	// on defini let temps
    $threetime = $temps * 60;
  if($secondtime >= $threetime) {
	 // on detruit les session
      session_unset();
     // on detruit la session
     session_destroy();
    // on redirige
     header('location:view/page_login.php');	 
	}
  }
  
  $_SESSION['last_time'] = time();
	
     
if(!isset($_SESSION['email']) OR !isset($_SESSION['pmd'])){
	
// on detruire les variable
unset($_SESSION['email'],$_SESSION['pmd']);
// et on rédirige
 header('Location: view/page_login.php');
}

?>