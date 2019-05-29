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

  public static function addPost() {
    
  }
}