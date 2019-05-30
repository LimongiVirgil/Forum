<?php
require 'bootstrap.php';
include 'inc/inscription/header.php';
?>

<div class="inscription">
<img src="inc/img/logo-connexion.png" alt="logo connexion">
  <h2>S'inscrire</h2>
  <form action="register.php" method="POST" class="form">
    <input class="input" type="text" name="email" placeholder="Email" required/>
    <input class="input" type="text" name="pseudo" placeholder="Pseudo" required/>
    <input class="input" type="password" name="mdp" placeholder="Mot de passe" required/>
    <input class="input input--orange" type="submit" name="form_insert" value="Inscription" required/>
  </form>
</div>

</body>
</html>