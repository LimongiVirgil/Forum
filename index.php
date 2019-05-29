<?php include 'inc/header.php';?>

<form action="connexion.php" method="POST">
  <label for="pseudo">Pseudo</label>
  <input type="text" name="pseudo">
  <label for="mdp">Mot de passe:</label>
  <input type="password" name="mdp">
  <input type="submit" value="connexion">
</form>

<?php include 'inc/footer.php';?>