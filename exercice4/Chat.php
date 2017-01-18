<?php

class Chat {

  private $data = array();
  private $prenom;
  private $age;
  private $couleur;
  private $sexe;
  private $race;

  public function __construct($prenom,$age,$couleur,$sexe,$race) {
    $this->prenom = $prenom;
    $this->age = $age;
    $this->couleur = $couleur;
    $this->sexe = $sexe;
    $this->race = $race;
  }
  // renvoi le prénom du chat
  public function getPrenom() {
    return $this->prenom;
  }
  // attribue une valeur au prénom du chat
  public function setPrenom($value) {
    if( gettype($value)=="string" && strlen($value) > 3 && strlen($value) < 20 )
    $this->prenom = $value;
  }
  // renvoi l'age du chat
  public function getAge() {
    return $this->age;
  }

  // attribue une valeur à l'age du chat
  public function setAge($value) {
    if( gettype($value)=="integer" )
    $this->age = $value;
  }
  // renvoi la couleur du chat
  public function getCouleur() {
    return $this->couleur;
  }
  // attribue une valeur à la couleur du chat
  public function setCouleur($value) {
    if( gettype($value)=="string" && strlen($value) > 3 && strlen($value) < 10  )
    $this->couleur = $value;
  }
  // renvoi le sexe du chat
  public function getSexe() {
    return $this->sexe;
  }
  // attribue une valeur au sexe du chat
  public function setSexe($value) {
    if(gettype($value)=="string" && ($value==="male" || $value==="femelle"))
    $this->sexe = $value;
  }
  // renvoi la race du chat
  public function getRace() {
    return $this->race;
  }
  // attribue une valeur à la race du chat
  public function setRace($value) {
    if(strlen($value) > 3 && strlen($value) < 20) {
      $this->race = $value;
    }
  }


  public function getInfos() {

    $tab ="";
    $donnees = array(
      "prenom" => $this->prenom,
      "age" => $this->age,
      "couleur" => $this->couleur,
      "sexe" => $this->sexe,
      "race" => $this->race
    );

    foreach($donnees as $key => $value) {
      $tab .= ("<p>".$key." : ".$value. "</p>");
    }
    return $tab;
  }
}
