var data = {"total":0,"rows":[]};
var totalCost = 0;

$(document).ready(function (){

    $.getJSON('JSON/categorieProduit.json', function(donnees) {
      $.each(donnees,function(index,value){
        $('.products').prepend('<h3>'+value.libelle+'</h3>');
        $.each(value.produits, function(index,produit){
          let codeHTML = '<li class="item "><a href="#" >'
          if(produit.image===null ||!produit.image){
            codeHTML+='<img src="image/nondispo.jpg" width="200px" height="200px" alt="non dispo"/>'
          }
          else{
            codeHTML+='<img src='+produit.image+'  width="200px" height="200px" alt="dispo"/>'
          }
          codeHTML+='<a href="#">'
          codeHTML+='<p>'+produit.libelle+'</p>'
          codeHTML+='<p>'+produit.prixVente+' €/ kg </p></a></li>';
          $('#listeProduits').append(codeHTML);

          creationDragDrop();
      });


  });


  });


function creationDragDrop(){
    $('#cartcontent').datagrid({
        singleSelect:true
    });
    $('.item').draggable({
        revert:true,
        proxy:'clone',
        onStartDrag:function(){
            $(this).draggable('options').cursor = 'not-allowed';
            $(this).draggable('proxy').css('z-index',10);
        },
        onStopDrag:function(){
            $(this).draggable('options').cursor='move';
        }
    });
    $('.cart').droppable({
        onDragEnter:function(e,source){
            $(source).draggable('options').cursor='auto';
        },
        onDragLeave:function(e,source){
            $(source).draggable('options').cursor='not-allowed';
        },
        onDrop:function(e,source){
            var name = $(source).find('p:eq(0)').html();
            var price = $(source).find('p:eq(1)').html();
            price = parseFloat(price);
            addProduct(name, price);
        }
    });
};

function addProduct(name,price){
    function add(){
        for(var i=0; i<data.total; i++){
            var row = data.rows[i];
            if (row.name == name){
                row.quantity += 1;
                return;
            }
        }
        data.total += 1;
        data.rows.push({
            name:name,
            quantity:1,
            price:price
        });
    }
    add();
    totalCost += price;
    $('#cartcontent').datagrid('loadData', data);
    $('div.cart .total').html('<h3>Total: '+totalCost.toFixed(2)+ '€</h3>');


}



$( "#commander" ).click(function() {
    document.location.href="index.php?page=3";
});


});
