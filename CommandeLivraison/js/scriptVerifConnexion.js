$(document).ready(function(){


    if(!$.session.get('connecte')||$.session.get('connecte')==-1){
      alert("Vous n'êtes pas connecté, redirection vers la page de connexion !");
      document.location.href= "index.php?page=1";
    }

  $('#deconnexion').click(function(){
    $.session.set('connecte', -1);
    alert('deconnexion effectuée')
    document.location.href= "index.php?page=1"
  });
})
