$(document).ready(function (){

    let produitsCommande='';
    let montantCommande=0;
    $.getJSON('JSON/commandes.json', function(donnees) {
      //console.log(donnees);
      let bool=false
      $.each(donnees,function(index,commande){
        if(commande.client.id==$.session.get('connecte')){
          let titre='<h3> Bienvenue, vous êtes connecté sur le compte : '+commande.client.raisonSociale
          $('#titre').append(titre);
          bool=true
          $.each(commande.lignes,function(index,ligne){

            produitsCommande=produitsCommande+ligne.produit.libelle+' ( x '+ligne.quantite+' )</br>';
            montantCommande=montantCommande+ligne.produit.prixVente*ligne.quantite;

          });
          let codeHTML='<tr><td>'+commande.id+'</td><td>'+ commande.dateLivraison+'</td><td>'+montantCommande+' euros</td><td>'+produitsCommande+'</td></tr>'
          $('#insertionDonnee').append(codeHTML);
          produitsCommande='';
          montantCommande=0;

        }
      })
      if (!bool){
        $('#tableauCommande').hide();
        let idPasPresent="<br/><br/><CENTER> Aucune commande n'a été effectué sur ce compte </CENTER>";
        $('#informationsCommande').prepend(idPasPresent);
      }

  });
});
