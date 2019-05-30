<?php 
  require 'bootstrap.php';
  include 'inc/connexion/header.php'
?>

<div class="connexion">
  <img src="inc/img/logo-connexion.png" alt="logo connexion">
  <?php
  if (isset($_SESSION['user'])) {
    echo $_SESSION['user']->pseudo();
    echo '<h2>Vous êtes déconnécté</h2>'; 
    session_destroy();

  } else {

    echo '<h2>Nous ne somme pas parvenu à vous déconnecter</h2>'; 

  }
  ?>
  
</div>