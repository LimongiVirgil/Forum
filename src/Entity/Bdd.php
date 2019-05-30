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

  public static function getLastIdPost() {
    $bdd = self::connect()->query("SELECT LAST_INSERT_ID() FROM post");
    $lastId = $bdd->fetch();
    return $lastId;
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

  public static function getUserbyIdPost($idPost) {
    $bdd = self::connect()->prepare("SELECT * FROM react where id_post = :idPost");
    $bdd->execute(['idPost' => $idPost]);
    $react = $bdd->fetch();
    $bdd = self::connect()->prepare("SELECT * FROM utilisateur where id = :idUser");
    $bdd->execute(['idUser' => $react['id_user'] ]);
    $userSQL = $bdd->fetch();
    $user = new User($userSQL['id'],$userSQL['pseudo'],$userSQL['mdp'],$userSQL['email']);
    return $user;
  }
}


