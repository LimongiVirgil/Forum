<?php

require 'bootstrap.php';


$liker = new App\Entity\Like($_SESSION['user']->id());
if ($liker->Like() != null) {
  $liker->deleteLike();
} else {
  $liker->addLike();
}