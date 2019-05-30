<?php
require 'bootstrap.php';


if ($_POST["pseudo"] != null and $_POST["mdp"] != null) {
  $pseudo = $_POST['pseudo'];
  $mdp = $_POST['mdp'];
  $bdd = new App\Entity\Bdd();
  $user = $bdd->userPseudo($pseudo);
  $TruePassword = password_verify($mdp, $user->mdp());
  if ($TruePassword ) {

    session_start();
    $_SESSION['user'] = $user ;
    session_write_close();
    var_dump( $_SESSION);
    header('Location: accueil.php');

    function isLoggedIn() : bool {
      return isset($_SESSION['user']);
    }
  
    var_dump(isLoggedIn());
    
    exit();
  } else {
   header('Location: index.php');
    exit();
  }
} else {
  header('Location: index.php');
  exit();
}