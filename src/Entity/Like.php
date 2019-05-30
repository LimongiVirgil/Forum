<?php

namespace App\Entity;

class Like {
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

  public function setIdLike(int $id_like) {
    $this->id_like = $id_like;
  }

  public function setIdUser(string $id_user) {
    $this->id_user = $id_user;
  }

  public function setIdPost(string $id_post) {
    $this->id_post = $id_post;
  }

  //Les requêtes

  public function addLike() {
    $bdd = Bdd::connect()->prepare("  INSERT INTO react VALUES (:id_user, :id_post)");
    $bdd->execute(
      [
        'id_user'      => $this->id_user,
        'id_post'    => $this->id_post
      ]
    );
  }

  public function deleteLike() {
    $bdd = Bdd::connect()->prepare(" DELETE FROM react WHERE id_user = :id_user and id_post = :id_post");
    $bdd->execute(
      [
        'id_user'      => $this->id_user,
        'id_post'    => $this->id_post
      ]
    );
  }

  public function Like() {
    $bdd = Bdd::connect()->prepare(" SELECT * FROM react
    WHERE id_user = :id_user and id_post = :id_post");
    $bdd->execute(
      [
        'id_user'      => $this->id_user,
        'id_post'    => $this->id_post
      ]
    );
    $user = $bdd->fetch();
    return $user;
  }
}