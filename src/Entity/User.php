<?php
namespace App\Entity;

class User {
  private $id;
  private $email;
  private $pseudo;
  private $mdp;

  //Constructeur

  function __construct($id,$pseudo,$mdp,$email) {
    $this->id = $id;
    $this->email = $email;
    $this->pseudo = $pseudo;
    $this->mdp = $mdp;
  }
  
  //Liste des getters

  public function id() {
    return $this->id;
  }

  public function email() {
    return $this->email;
  }

  public function pseudo() {
    return $this->pseudo;
  }

  public function mdp() {
    return $this->mdp;
  }

  //Liste des setters

  public function setId(int $id) {
    $this->id = $id;
  }

  public function setEmail(string $email) {
    $this->email = $email;
  }

  public function setPseudo(string $pseudo) {
    $this->pseudo = $pseudo;
  }

  public function setMdp(string $mdp) {
    $this->mdp = $mdp;
  }

  public function saveUser(){
    $bdd = Bdd::connect()->prepare("INSERT INTO utilisateur (
      pseudo,
      email,
      mdp
    ) VALUES (:pseudo, :email, :mdp)");
    $bdd->execute(['pseudo'  => $this->pseudo(),
                    'email'  => $this->email(),
                    'mdp'    => $this->mdp()]
    );
    $user = $bdd->fetch();
    return $user;
  }
}