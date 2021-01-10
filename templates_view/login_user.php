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
    <link rel="stylesheet" href="css/login.css" type="text/css" />

</head>

<body>

    <div id="container_principale">
	<div class="content_form">
	<form method="post" id="form_principale" action="index.php?action=addLogin">
	<h1>Connexion</h1>
	<table id="forms">
    <tr>
    <td>Email adresse<br/><input type="email" id="email" name="email" class="example" required placeholder="Enter email" required><br/><span id="emil"></span></td>
    </tr>
	<tr>
    <td>Password<br/><input type="password" id="pas" name="pas"  class="example" placeholder="Password" required></td>
   </tr>
   
   <tr>
    <td>Check me out<input type="checkbox"  id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"></td>
  </tr>
  <tr><td><input type="submit" value="envoyer">
  </td></tr>
	
	</table>
	</form>
    </div><!--content_form-->

   </div><!--container_principale-->



	<?php include('js/inc_foot_scriptjs.php'); ?>
</body>
</html>
    