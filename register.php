<?php

require_once __DIR__ . '/vendor/autoload.php';

$bdd = new App\Entity\Bdd();
$user = $bdd->userPseudo($_POST['pseudo'])->pseudo();
$mail = $bdd->userEmail($_POST['email'])->email();

var_dump($_POST);
if (isset($_POST['ajouter'])) {
  echo 'formulaire non envoyé';
} else {
  // Le pseudo ne doit pas être vide
  if (empty($_POST['pseudo'])) {
    echo 'Le pseudo est vide !';
    header('Location: incription.php');

    //Le pseudo doit contenir entre 3 & 15 caractéres
  } elseif (strlen($_POST['pseudo']) < 3 || strlen($_POST['pseudo']) > 15) {
    echo 'Le pseudo doit contenir entre 3 & 15 caractéres !';
    header('Location: incription.php');

    //Caractéres non-autorisés
  }  elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo'])) {
    $message = 'Caractéres non autorisé dans le pseudo !';
    header('Location: incription.php');

    //Pseudo déjà utilisé
  } elseif ($user != null) {
    $message = 'Pseudo utilisé';
    header('Location: incription.php');
    

    //Email déjà utilisé
  } elseif ($mail != null) {
    echo 'Email déjà pris';
    header('Location: incription.php');

    //Validité de l'email
  } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $message = 'Email invalide!';
    echo $message ;
    header('Location: incription.php');

    //Si tout va bien
  } else {
    $hash = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    $newUser = new App\Entity\User('', $_POST['pseudo'],
                                        $hash,
                                        $_POST['email'],
                                        $_POST['mdp']
    );
    $newUser->saveUser();
    var_dump($newUser);
    session_start();
    $_SESSION['user'] = $newUser ;
    $message = 'vous etes inscrit !';
    header('Location: acceuil.php');
    exit(); 
  }
}