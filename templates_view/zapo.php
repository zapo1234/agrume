
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
    
	<div class="content_form">
	<h2> Afficher la liste en base de données</h2>
     
	 <?php
	 // on recupere dans une boucle
	 while($lists = $list->fetch()){
		 
	 ?>	 
	  <div class="x"><?= htmlspecialchars($lists['email'])?> l'adresse:</br>
	  <?= htmlspecialchars($lists['tel'])?>
	 
	 <?php
	 }
	 ?>
	
	<table id="forms">
    
    <tr><td><button type="button" id="btn">lister</button>
  </td></tr>
	
	</table>
	
    </div><!--content_form-->

   </div><!--container_principale-->



	<?php include('inc_foot_scriptjs.php'); ?>
	<script type="text/javascript">
	$(document).ready(function(){
	
	$('#number').keyup(function(){
	$('#num').html('');	
		
	});
	
	$('#email').keyup(function(){
	$('#emil').html('');	
		
	});
	
	$('#adresse').keyup(function(){
	$('#pas').html('');	
		
	});
	
	
	
	$('#btn').click(function() {
	var number=$('#number').val();
    var email=$('#email').val();
	var adresse=$('#adresse').val();
	var pass=$('#pass').val();
    
    var regex = /^[a-zA-Z0-9]{8,90}$/;	
	var rege = /^[+0-9]{12,14}$/;
	var reg = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
	

    if (!rege.test(number)){
      $('#num').html('syntaxe number incorrecte');
    }
	else if (!reg.test(email)) { 
    $('#emil').html('erreur de syntaxe de votre email');
	}
   
   else if (adresse.length > 90) {
	   $('#pas').html('le nombre de caractère est compris entre 8 et 90');  
   }
  else{
  $('#form_principale').submit();
  }
	});
		
	});
	
	
	
	
	
	</script>
	
</body>

</html>

