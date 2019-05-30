<?php 
require 'bootstrap.php';
include 'inc/homepage/header.php';
?>

<header>

    <nav class="nav">
      <ul class="lists">
        <li>ACTUALITÉS</li>
        <li>RECETTES</li>
        <li>ADRESSES</li>
        <img class="logo" src="inc/img/logo2.png" alt="logo SUF">
        <li>NOS PARTENAIRES</li>
        <li>À PROPOS</li>
        <li><a href="deconnexion.php">DECONNEXION</a></li>
      </ul>
    </nav>

  </header>

  <section class="forum">
    <div class="forum__container">
      <div class="container">
        <div class="subscription">
          <div class="subscription__container">
            <div class="general">Général</div>
            <div class="mychanels">Mes chaînes</div>
          </div>
          <div class="mychanels__container">
            <div class="chaine">
              <p class="chaine__content--selected">#Thaï</p>
              <p class="chaine__content">#RecettesRamadan</p>
              <p class="chaine__content">#Indien</p>
              <p class="chaine__content">#Apéritifs</p>
              <p class="chaine__content">#Italien</p>
              <p class="chaine__content">#SushiLover</p>
              <p class="chaine__content">@SophieDelarte</p>
              <p class="chaine__content">@Tron666</p>
              <p class="chaine__content">@LucCunot</p>
              <p class="chaine__content">@AnastasiDot</p>
              <p class="chaine__content">@LucieBoutilia</p>
              <p class="chaine__content">@VirgilLimun</p>
              <p class="chaine__content">@MomoK</p>
            </div>
          </div>
        </div>


      <div class="tchat">
        <div class="tchat__header">
          <p class="tchat__group">#Thaî</p>
          <p class="tchat__number">20/95 personnes</p>
        </div>
        <?php $allPost = App\Entity\Post::allPost();
          foreach ($allPost as $post):
          $user = App\Entity\Bdd::getUserbyIdPost($post->id_post());
        ?>
        <div class="publication">
          <div class="contenu"><?= $user->pseudo() . ' : ' . $post->content(); ?></div>
        </div>
        <?php endforeach; ?>

          <form action="message.php" class="input" method="POST">
            <input class="tchat__message" type="text" name="content" placeholder="Ecrire un message..." required>
            <input class="tchat__valider" type="submit" name="submit" value="Envoyer">
          </form>
        </div>
      </div>
  </section>

  <section class="members">

    <div class="container">
      <div class="profil">
        <div class="profil__container">
          <img class="profil__picture" src="inc/img/picture-user1.png" alt="photo de profil">
          <p class="profil__name">Sophie Delarte</p>
          <p class="profil__text">Salut tout le monde ! Je m'appelle Sophie, et depuis toujours j'adore cuisiner ! C'est
            avec plaisir que je partage avec vous toutes mes recettes et mes bonnes pratiques ! À vos fournaux !</p>
        </div>
        <img class="profil__pictos" src="inc/img/pictos.png" alt="pictogrammes like et partage">
      </div>

      <div class="recipe">
        <div class="recipe__description">
          <div class="recipe__content">
            <h2 class="recipe__title">Les sticks de bacon</h2>
            <div class="steps">
              <div class="steps__dot"></div>
              <p class="steps__text">Étaler le fromage sur chaque tranche de bacon</p>
            </div>
            <div class="steps">
              <div class="steps__dot"></div>
              <p class="steps__text">Rajouter un peu de citron</p>
            </div>
            <div class="steps">
              <div class="steps__dot"></div>
              <p class="steps__text">Enrouler les tranches</p>
            </div>
            <div class="steps">
              <div class="steps__dot"></div>
              <p class="steps__text">Les piquer sur un curre dent</p>
            </div>
            <button class="recipe__button">Voir plus</button>
          </div>
          <img class="recipe__pictos" src="inc/img/recipe-pictos.png" alt="pictogrammes">
        </div>
        <img src="inc/img/bacon-stick.png" alt="photo bacon sticks">
      </div>
    </div>

    <div class="container">
      <div class="recipe">
        <img src="inc/img/avocado-toast.png" alt="photo toast aux avocats">
        <div class="recipe__description">
          <div class="recipe__content recipe__content--pair">
            <h2 class="recipe__title">Toasts aux avocats</h2>
            <div class="steps">
              <div class="steps__dot"></div>
              <p class="steps__text">Écraser les avocats avec une fourchette</p>
            </div>
            <div class="steps">
              <div class="steps__dot"></div>
              <p class="steps__text">Rajouter un peu de citron et des épices</p>
            </div>
            <div class="steps">
              <div class="steps__dot"></div>
              <p class="steps__text">Pôcher les oeufs</p>
            </div>
            <div class="steps">
              <div class="steps__dot"></div>
              <p class="steps__text">Couper la coriandre</p>
            </div>
            <button class="recipe__button">Voir plus</button>
          </div>
          <img class="recipe__pictos" src="inc/img/recipe-pictos.png" alt="pictogrammes">
        </div>

      </div>

      <div class="profil">
        <div class="profil__container">
          <img class="profil__picture" src="inc/img/picture-user2.png" alt="photo de profil">
          <p class="profil__name">Pierre Dupont</p>
          <p class="profil__text">Je m'appelle Pierre, je suis chef d'un restaurant étoilé, et ce que j'aime par dessus
            tout, c'est faire découvrir de nouvelles saveurs. Si vous souhaitez voyagez, c'est avec plaisir que je vous
            partage mes découvertes !</p>
        </div>
        <form action="liker.php">
          <input action="liker.php" class="profil__pictos" type="submit" name="like" value="Liker">
        </form>
      </div>
    </div>

    <div class="container">
      <div class="profil">
        <div class="profil__container">
          <img class="profil__picture" src="inc/img/picture-user3.png" alt="photo de profil">
          <p class="profil__name">Ren Sato</p>
          <p class="profil__text">Moshimoshi ! Grand amateur de cuisine, surtout japonaise, j'expérimente chaque jour afin de trouver des recettes originales liant la cuisine occidentale et asiatique. Venez vite découvrir mes trouvailles ! </p>
        </div>
        <img class="profil__pictos" src="inc/img/pictos.png" alt="pictogrammes like et partage">
      </div>

      <div class="recipe">
        <div class="recipe__description">
          <div class="recipe__content">
            <h2 class="recipe__title">Pancankes au yuzu</h2>
            <div class="steps">
              <div class="steps__dot"></div>
              <p class="steps__text">Mélanger la farine, le beurre et le lait</p>
            </div>
            <div class="steps">
              <div class="steps__dot"></div>
              <p class="steps__text">Rajouter le yuzu, goûter puis ajuster le dosage</p>
            </div>
            <div class="steps">
              <div class="steps__dot"></div>
              <p class="steps__text">Continuer de mélanger jusqu'à obtentir une préparation lisse</p>
            </div>
            <div class="steps">
              <div class="steps__dot"></div>
              <p class="steps__text">Faire chauffer une petite poêle </p>
            </div>
            <button class="recipe__button">Voir plus</button>
          </div>
          <img class="recipe__pictos" src="inc/img/recipe-pictos.png" alt="pictogrammes">
        </div>
        <img src="inc/img/pancakes.png" alt="photo bacon sticks">
      </div>
    </div>
  </section>

<!-- <form action="liker.php" method="POST">
  <input type="submit" value="connexion">
<form> -->



<?php include 'inc/homepage/footer.php';?>