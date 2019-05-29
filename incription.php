<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'inc/header.php';
?>

<div>
  <h2>Ajoutez un membre</h2>
  <form action="register.php" method="POST">
    <input type="text" name="email" placeholder="Email" required/>
    <input type="text" name="pseudo" placeholder="Pseudo" required/>
    <input type="password" name="mdp" placeholder="Mot de passe" required/>
    <input type="submit" name="form_insert" required/>
  </form>
</div>

<?php   
  if ($message) {
    ?><h2><?php $message ;?></h2><?php
  }
?>

<h2><?php $message ;?></h2>

<?php include 'inc/footer.php';?>