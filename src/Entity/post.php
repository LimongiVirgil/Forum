<?php

namespace App\Entity;

class Post {
  private $id_post;
  private $content;

  //Liste des getters

  public function id() {
    return $this->id;
  }

  public function content() {
    return $this->content;
  }

  //Liste des setters

  public function setId(int $id) {
    $this->id = $id;
  }

  public function setContent(string $content) {
    $this->content = $content;
  }

  //Les requêtes

  public static function addContent($content) {
    $bdd = self::connect()->prepare("SELECT * FROM post WHERE content = :content");
    $bdd->execute(['content' => $content]);
    $userSQL = $bdd->fetch();
    $user = new Post($userSQL['id'], $userSQL['content']);
    return $user;
  }
}