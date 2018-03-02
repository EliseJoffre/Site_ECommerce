<div id="CoordEntreprise">
  <p> Nom entreprise </p>
  <p> Adresse entreprise </p>
  <p> Téléphone </p>
  <p> Email </p>
</div>

<div class="Titres">
    <h1>Facture</h1>
    <h2> Date de la facture </h1>
</div>

<div id="CoordClient">
  <p> Nom Prenom </p>
  <p> Adresse  </p>
  <p> Téléphone </p>
  <p> Email </p>
</div>

<div id="tableauFacture">
  <table border="1" id="tableau">
    <tr>
      <th> Produit </th>
      <th> Quantité </th>
      <th> Prix à l'unité </th>
    </tr>
  </table>
  <input type="button" id="generer" value="Générer la facture">
  <div id="zone">
  </div>
  <script src="jquery.min.js" type="text/javascript"></script>
  <script src="bootstrap.min.js" type="text/javascript"></script>
  <script>

      $(function() {

        $('#generer').on('click', function(){

          $.getJSON('facture.json',function(data){
            $('#tableau').append('<tr> <td>'+data.Produit+'</td>');
            $('#tableau').append('<td>'+data.Quantité+'</td>');
            $('#tableau').append('<td>'+data.Prix+'</td> </tr>');
          });

        });

      });

    </script>
</div>

<div id="montant">
  <p> Montant total à payer </p>
</div>
<div id="Bouton">
  <input type="button" value="Envoyer la facture">
</div>
