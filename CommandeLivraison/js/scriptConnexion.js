$(document).ready(function(){


  $('#form').bind('submit', function(event){
    event.preventDefault();

    let login, mdp;
    login = $("#login").val();
    mdp = $("#password").val();

    $.getJSON('JSON/comptes.json', function(data){


      let connecte = false
      data.forEach(function(element){
        if(element.login === login && element.pass === mdp){
          connecte = true;
        }
      })

      if(connecte){
        $.session.set('connecte', true)
        document.location.href= "index.html"
      }
      else
      {
        afficherErreur("Login ou mdp incorrect")
      }
    })

  })


  function afficherErreur(erreur){
    let error = $('#error-connexion')
    error.text(erreur);
  }
})
