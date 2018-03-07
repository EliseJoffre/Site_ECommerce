$(document).ready(function(){






	$("form").bind('submit', function(event){
     //stops browser from submitting the form
     //and redirecting.
     event.preventDefault();
		 $.getJSON('JSON/utilisateur.json', function(donnees) {
			 			if($("#mail").val()==donnees.login && $("#exampleInputPassword1").val()==donnees.mdp){

							document.location.href="index.php?page=3";
					}
					else{
						event.preventDefault();
						alert('erreur, mot de passe ou login incorrect');
						$('#mail').val('');
						$('#exampleInputPassword1').val('');
					}
 		  });
     //use jquery form plugin to submit via ajax here or do it by hand
});



});
