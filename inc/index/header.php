<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="inc/css/reset.css" />
  <link rel="stylesheet" type="text/css" href="inc/css/style.css" />
  <title>SUF</title>
</head>
<body>

<div class="backgrounds">
  <div class="backgrounds--picture">
    <div class="description">
      <div class="description__container">
        <img class="description__logo" src="inc/img/search-logo.png" alt="logo loupe">
        <p class="description__text">Recherche des recettes</p>
      </div>
      <div class="description__container">
        <img class="description__logo" src="inc/img/comunity-logo.png" alt="logo communauté">
        <p class="description__text">Rejoins tous les amateurs de cuisine du monde</p>
      </div>
      <div class="description__container">
        <img class="description__logo" src="inc/img/chat-logo.png" alt="logo chat">
        <p class="description__text">Partage tes recettes avec les membres</p>
      </div>
    </div>
  </div>

  <img class="biglogo" src="inc/img/logo-big.png" alt="logo SUF">

<!--   <a href="index.php" class="nav-link">Connexion</a>
  <a href="inscription.php" class="nav-link">Inscription</a> -->

  <?php if (isset($_SESSION['user'])) {
    ?><a href="deconnexion.php" class="nav-link">Déconnexion</a><?php
  }