<?php

namespace App\Repository;

class Repository {

  public function UserInfo($id) {
    $pdo = connectBDD();
    $bdd = $pdo->prepare();

    $bdd->fetch(PDO::FETCH_CLASS, 'User');
  };
}

//bin param