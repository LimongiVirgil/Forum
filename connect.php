<?php include 'inc/connexion/header.php';?>

<div class="connexion">
  <img src="inc/img/logo-connexion.png" alt="logo connexion">
  <h2>Se connecter</h2>
  <form action="connexion.php" method="POST" class="form">
    <!-- <label for="pseudo">Pseudo</label> -->
    <input class="input" type="text" name="pseudo" placeholder="Pseudo">
    <!-- <label for="mdp">Mot de passe:</label> -->
    <input class="input" type="password" name="mdp" placeholder="Mot de passe">
    <input class="input input--orange" type="submit" value="connexion">
  </form>
</div>