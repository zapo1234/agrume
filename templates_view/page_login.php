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
    <link rel="stylesheet" href="public/css/login?v=0.0.52" type="text/CSS" />

</head>

<body>

    <div id="container_principale">
    <a href="index.php?action=login">Connectez vous</a>
	<div class="content_form">
	<form method="post" id="form_principale" action="index.php?action=addComment">
	<h1>Register</h1>
	<table id="forms">
    <tr>
    <td>Email adresse<br/><input type="email" id="email" name="email" class="example" required placeholder="Enter email"><br/><span id="emil"></span></td>
    </tr>
	<tr>
    <td>Adresse<br/><input type="text" id="adresse" name="adresse"  class="example" required placeholder="Password"><br/><span id="pas"></span></td>
   </tr>
  
   <tr>
    <td>Number<br/><input type="text" id="number" name="number" class="example" placeholder="number" required><br/><span id="num"></span></td>
    </tr>
	<tr>
    <td>Password<br/><input type="password" id="pass" name="pass"  class="example" placeholder="Password"></td>
   </tr>
   
   <tr>
    <td>Check me out<input type="checkbox"  id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"></td>
  </tr>
  <tr><td><button type="button" id="btn">Submit</button>
  </td></tr>
	
	</table>
	</form>
    </div><!--content_form-->

   </div><!--container_principale-->

 <?php include('js/inc_foot_scriptjs.php'); ?>
 <?php include('js/register.js'); ?>
	
</body>

</html>


    