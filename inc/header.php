<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Forum</title>
</head>
<body>
  <h1>Bonjour, Bienvenur sur le forum<h1>

  <a href="index.php" class="nav-link">Connexion</a>
  <a href="incription.php" class="nav-link">Inscription</a>

  <?php if (isset($_SESSION['user'])) {
    ?><a href="deconnexion.php" class="nav-link">Déconnexion</a><?php

  }