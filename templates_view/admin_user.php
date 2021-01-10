<?php
include('session_security/inc_session.php');
?>
<!doctype html>
<html lang="fr">

<head>
	<!-- Required meta tags -->
	<?php include('inc_entete.php'); ?>
	<title>ERP de solution de chiffrage devis, facturation</title>
	<meta property="og:title" content="viidea -ERP de solution de chiffrage" />

	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.erpviidea.com/" />
	<meta property="og:description" content="Logiciel ERP innovant en mode Saas chiffrage devis et facturation" />
	<!-- TWITTER CARD -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="http://www.erpviidea.com/" />
	<meta name="twitter:title" content="Solution ERP de chiffrage innovant" />
	<meta name="twitter:description" content="Mobilité de solution de chiffrage en mode Saas" />
	<link rel="shortcut icon" href="" />

	<!-- style CSS -->
	<link rel="stylesheet" href="css/user_admin_source_style.css?v=0.0.38" type="text/CSS" />
	<link rel="stylesheet" href="css/inc_menu.css?v=0.0.2" type="text/CSS" />
	<link rel="stylesheet" href="css/page_principale?v=0.0.52" type="text/CSS" />
    <!-- Google Font-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:Thin,Light,Bold">
    <link rel="stylesheet" href="css/login?v=0.0.52" type="text/CSS" />

</head>

<body>

  <div id="container">
    
	<div class="content_form">
	<h2>Bienvenu sur votre profil </h2>
     <?php
	  $result = $_SESSION['result'];
	  
	 ?>
	 <table>
	 <tr>
	 <td>Votre email:<?= $result['email'];?></td>
	 </tr>
	 <tr>
	 <td>Votre adresse:<?= htmlspecialchars($result['adresse']);?></td>
	 </tr>
	 <tr>
	 <td>Votre adresse:<?= $result['id'];?></td>
	 </tr>
	 </table>
	 <?php
	 
	 ?>
	

	<h2>Laisser votre commentaire</h2>
	<form method="post" action="annonces.php?action=addAnnonce">
	<table>
	<td>titre de l'annonce :<input type="text" id="titre" name="titre" required></td>
	<td>contenu :<textarea name="message" id="message" required></textarea></td>
	<td><input type="hidden" name="token" value="<?php echo$_SESSION['token'];?>"></td>
	</table>
	<div><input type="submit" value="envoi"></div>
	</form>
   
    <div class="container">
	<h2>Afficher les annonces de l'user</h2>
	
	<?php
	// on recupere les resultat du user connecté
	$liste = annonces($_SESSION['email']);
	 // on recupere dans une boucle
	 while($lists = $liste->fetch()){
		 
	 ?>	 
	  <div class="x"><?= htmlspecialchars($lists['titre'])?> l'adresse:</br>
	  <?= htmlspecialchars($lists['message'])?> <br/></div>
	  <div><a href="annonces.php?action=show_annonce&id_annonce=<?= $lists['identifiant']?>">modifier</a></div>
	 
	 <?php
	 }
	 ?>
	
	</div><!-- container-->
	
    </div><!--content_form-->

   </div><!--container_principale-->



	<?php include('js/inc_foot_scriptjs.php'); ?>
	
</script>
	
</body>

</html>


  