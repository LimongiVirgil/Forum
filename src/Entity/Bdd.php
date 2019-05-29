<?php

namespace App\Entity;

use PDO;

require_once __DIR__ . '/../../vendor/autoload.php';

class Bdd {
  private static $pdo;

  public static function connect() {
    if (self::$pdo != NULL) {
      return self::$pdo;
    }

    try {
      self::$pdo = new \PDO(
        'mysql:host=localhost;dbname=forum;',
        'root',
        '',
        [
          PDO::ATTR_ERRMODE             => PDO::ERRMODE_WARNING,
          PDO::MYSQL_ATTR_INIT_COMMAND  => 'SET NAMES utf8',
        ]
      );

      return self::$pdo;
      
    } catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
  }

  public static function userPseudo($pseudo)
  {
    $bdd = self::connect()->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo");
    $bdd->execute(['pseudo' => $pseudo]);
    $userSQL = $bdd->fetch();
    $user = new User($userSQL['id'], $userSQL['pseudo'], $userSQL['mdp'], $userSQL['email']);
    return $user;
  }

  public static function userEmail($email) {
    $bdd = self::connect()->prepare("SELECT * FROM utilisateur WHERE email = :email");
    $bdd->execute(['email' => $email]);
    $userSQL = $bdd->fetch();
    $user = new User($userSQL['id'], $userSQL['pseudo'], $userSQL['mdp'], $userSQL['email']);
    return $user;
  }

  public static function addFlash(string $type, string $content) : void {
    //Rajouter un élèment en fin de tableau
    //$tableau[] = $val; 
    $_SESSION['flash'][] = [
      'type' => $type,
      'content' => $content,
    ];
  }

  public static function getFlashes() : array {
    if (isset($_SESSION['flash'])) {
      $messages = $_SESSION['flash'];
      unset($_SESSION['flash']);
      return $messages;
    }
    return [];
  }
}


