

<div class="container">
    <div class="row col-sm-12">


        <center><h1> Catalogue </h1></center>

        <div class="categ"></div>
        <ul class="products" id="listeProduits">
        </ul>
        <div class="cart">
            <h1>Mon panier</h1>

                <table id="cartcontent" fitColumns="true" style="col-sm-offset-4 col-sm-3">
                    <thead>
                    <tr>
                        <th field="name" width=100>Produit</th>
                        <th field="quantity" width=60 align="right">Quantité</th>
                        <th field="price" width=80 align="right">Prix Unitaire</th>
                    </tr>
                    </thead>
                </table>

            <!--Double click sur quantité, devient input avec replaceWith et modifier quantite --->
            <center><h3 class="total">Total: 0€</h3></center>
            <h2>Glissez pour ajouter au panier</h2>
            <br><br>
            <center><button id="commander" type="button" class="btn btn-primary btn-lg">Commander</button>
            <button id="annuler" type="button" class="btn btn-secondary btn-lg">     Annuler     </button></center>
        </div>
      </div>
    </div>
