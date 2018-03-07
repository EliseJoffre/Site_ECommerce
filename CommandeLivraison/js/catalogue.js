$( function() {
    $( ".draggable" ).draggable({
        drag: function( event, ui ) {
            $( this )
                .find( "" )
                .html( "Produit ajouté " )
                .hide();
        }
    });

    $( "#droppable" ).droppable({
        drop: function( event, ui ) {
            $( this )
                .find( "h2" )
                .html( "1 produit " );
        }
    });
} );