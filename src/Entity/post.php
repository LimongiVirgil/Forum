<?php

namespace App\Entity;

class Post {
  private $id_post;
  private $content;

  //Liste des getters

  public function id_post() {
    return $this->id_post;
  }

  public function content() {
    return $this->content;
  }

  //Liste des setters

  public function setId($id_post) {
    $this->id_post = $id_post;
  }

  public function setContent($content) {
    $this->content = $content;
  }

  //Les requêtes

  public function addPost($idUser) {
    $bdd = Bdd::connect()->prepare('INSERT INTO post (id_post, content) VALUES (:id_post, :content)');
    $bdd->execute([
      'id_post' => $this->id_post,
      'content' => $this->content,
    ]);
    
    $lastIdPost = Bdd::getLastIdPost();
    $post = $bdd->fetch();
    $bdd = Bdd::connect()->prepare('INSERT INTO react (id_user, id_post) VALUES (:id_user, :id_post)');
    $bdd->execute([
      'id_user' => $idUser,
      'id_post' => $lastIdPost[0] 
    ]);
  }

  public static function allPost() {
    $bdd = Bdd::connect()->query("SELECT * FROM post ORDER BY id_post DESC LIMIT 7;");
    $allPostSQL = $bdd->fetchAll();
    $allPost = [];
    foreach ($allPostSQL as $value) {
      $post = new Post;
      $post->setId($value['id_post']);
      $post->setContent($value['content']);
      array_push($allPost, $post);
    }
    return $allPost;
  }
}