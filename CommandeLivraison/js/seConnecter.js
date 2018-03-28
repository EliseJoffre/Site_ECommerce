$(document).ready(function(){
	$("form").bind('submit', function(event){
     //stops browser from submitting the form
     //and redirecting.
     event.preventDefault();

		 let login, mdp;
     login = $("#login").val();
     mdp = $("#exampleInputPassword1").val();
		 categorie = $('#listeConnexion').val();
		 $.getJSON('JSON/comptes.json', function(donnees) {
			 console.log(donnees)
			 	let identifiant = -1;
				donnees.forEach(function(element){
	        if(element.login === login && element.pass === mdp && ((!(element.societe)&&categorie=='Particulier'))){
	          identifiant = element.personne.id;
	        }

					if (element.login === login && element.pass === mdp && ((!(element.personne)&&categorie=='Entreprise'))){
						identifiant=element.societe.id;
					}

	      });
				//identifiant=1; !!!!!!!!!!!!!!!! A REMETTRE QUAND ON VEUT TESTER POUR LE CLIENT AVEC L'IDENTIFIANT 1

				if(identifiant!=-1){
	        $.session.set('connecte', identifiant)
	        document.location.href= "index.php?page=10";
	      }
				else
	      {
	        afficherErreur("Login ou mdp incorrect")
	      }

});
function afficherErreur(erreur){
	let error = $('#error-connexion')
	error.text(erreur);
	alert('Erreur lors de la connexion, mot de passe, login ou catégorie incorrect');
	$('#exampleInputPassword1').val('');
}



});
})
