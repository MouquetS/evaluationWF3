$(function() {

  $('#form_car').on("submit",function(event){
    // annule la soumission du formulaire
    event.preventDefault();

    // récupère les données du formulaire sous forme de tableau
    $data = $(this).serialize();

    // requete ajax vers verification.php
    $.ajax({
      method:"post",
      url: "verification.php",
      data : $data,
      dataType:"json",
      success: function(res) {
        // si les champs n'ont pas été complétés correctement.
        if(!res.success) {
          if(res.error.annee) $('.errors')[0].prepend(res.error.annee);
          if(res.error.marque) $('.errors')[0].prepend(res.error.marque);
          if(res.error.modele) $('.errors')[0].prepend(res.error.modele);
          if(res.error.couleur) $('.errors')[0].prepend(res.error.couleur);
        }
      }
    });
  });
});
