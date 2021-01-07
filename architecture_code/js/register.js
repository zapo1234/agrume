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
	var reg_pass = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;
	


     if (!reg.test(email)) { 
    $('#emil').html('erreur de syntaxe du mail');
	}

    else if (!rege.test(number)){
      $('#num').html('syntaxe incorrecte du numéro de phone');
    }
	
   
   else if (adresse.length > 90) {
	   $('#pas').html('le nombre de caractères est compris entre 8 et 90');  
   }
  else{
     $('#form_principale').submit();
	
	}
		
	});
	
	});
	
	
	
	</script>