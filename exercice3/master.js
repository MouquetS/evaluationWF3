$(function() {

  $('#form_car').on("submit",function(event){
    event.preventDefault();

    $data = $(this).serialize();

    $.ajax({
      method:"post",
      url: "verification.php",
      data : $data,
      dataType:"json",
      success: function(res) {
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
