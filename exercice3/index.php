<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faisons le ménage !</title>
  </head>
  <body>
<h3>
    Ajout d'un véhicule :
</h3>
<div class="errors">

</div>
    <form method="post" id="form_car">
      <p>
        <label for="marque">Marque : </label>
        <input id="marque" type="text" name="marque" placeholder="Marque" required>
      </p>
      <p>
        <label for="modele">Modèle : </label>
        <input id="modele" type="text" name="modele" placeholder="modele" required>
      </p>
      <p>
        <label for="annee">Année : </label>
        <input id="annee" type="number" name="annee" placeholder="ex:1984" required>
      </p>
      <p>
        <label for="couleur">Couleur : </label>
        <input id="couleur" type="text" name="couleur" placeholder="couleur" required>
      </p>
      <input type="submit" name="soumettre" value="Valider">
    </form>


    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="master.js" charset="utf-8"></script>
  </body>
</html>
