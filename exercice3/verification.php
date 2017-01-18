<?php

// connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=exercise3;charset=utf8', 'root', '');

// tableau stockant les erreurs
$errors = [];

// teste le champ marque
if(isset($_POST['marque']) && empty($_POST['marque'])) {
  $errors["marque"] = "Le champ 'Marque' est mal renseigné";
}

// teste le champ modele
if(isset($_POST['modele']) && empty($_POST['modele'])) {
  $errors["modele"] = "Le champ 'Modele' est mal renseigné";
}

// teste le champ annee
if(isset($_POST['annee'])) {
    if(empty($_POST['annee']) || strlen($_POST['annee']) != 4 ) {
        $errors["annee"] = "Le champ 'Année' est mal renseigné";
    }
}

// teste le champ couleur
if(isset($_POST['couleur']) && empty($_POST['couleur'])) {
  $errors["couleur"] = "Le champ 'Couleur' est mal renseigné";
}


$success = false;
// aucune erreur dans les champs donc entre les données en BDD
if(empty($errors)) {
  $request = $db->prepare("INSERT INTO car(marque,modele,annee,couleur) VALUES(:marque,:modele,:annee,:couleur)");
  $request->execute(array(
    ":marque" => $_POST['marque'],
    ":modele" => $_POST['modele'],
    ":annee" => $_POST['annee'],
    ":couleur" => $_POST['couleur']
  ));
  $result = $request->fetch(PDO::FETCH_ASSOC);
  if($result) {
    $success = true;
  }
}

header('Content-Type: application/json'); // j'indique que ma réponse contient du JSON (et non du HTML).
// Je formate une réponse en JSON
echo json_encode(array("success" => $success, "error" => $errors));
