<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

if (isset($_POST['submit'])) {
  if (isset($_SESSION['user'])) {
    $post = new App\Entity\Post;
    $post->setId('');
    $post->setContent($_POST['content']);
    $post->addPost();
    echo $post->content();
    header('Location: accueil.php');
  } else {
    header('Location: connexion.php');
  }
} else {
  header('Location: inscription.php');
}