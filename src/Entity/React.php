<?php

namespace App\Entity;

class React {
  private $id_like;
  private $id_user;
  private $id_post;

  //Liste des getters

  public function id_like() {
    return $this->id_like;
  }

  public function id_user() {
    return $this->id_user;
  }

  public function id_post() {
    return $this->id_post;
  }

  //Liste des setters

  public function setId($id_like) {
    $this->id_like = $id_like;
  }

  public function setIdUser($id_user) {
    $this->id_user = $id_user;
  }

  public function setIdPost($id_post) {
    $this->id_post = $id_post;
  }

  //Les requêtes

  public function idPost() {
    $post = new Post;
    $idPost = $post->setId($value['id_post']);
    $bddPost = Bdd::connect()->prepare('INSERT INTO react (id_post) VALUES (:id_post)');
    $bddPost->execute([
      'id_post' => $idPost,
    ]);
  }

}